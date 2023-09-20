//useComp.js

//import ref function to define reactive properties
import {ref} from 'vue';

export default function globalMixin(){
    const base_url = ref (Oval.base_url);

    function isLinkActive(arr) {
        const urls = arr;
        const currentUrl = window.location.href;

        const isCurrentUrlInUrls = urls.some(url => {
          const urlRegExp = new RegExp('(^|\/)' + url.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&') + '(\/|$)', 'i');
          return urlRegExp.test(currentUrl);
        });

        return isCurrentUrlInUrls;
      }
    function isLinkActive1(arr) {

        const urls = arr;
        const currentUrl = window.location.href

        const urlRegExp = new RegExp(urls.join('|'), 'i')
        const isCurrentUrlInUrls = urls.some(url => urlRegExp.test(currentUrl))

        return isCurrentUrlInUrls;
        let active = false;
        arr.forEach(element => {
            if(route().current(element) ){
                active = true;
            }
        });
        return active;
    }


    function copyProperties(source_obj,target_obj,include_function = 'N') {
        for (let field in source_obj) {
            if(target_obj.hasOwnProperty(field)) {
                if(include_function == 'Y' || typeof(target_obj[field]) != 'function') {
                    target_obj[field] = source_obj[field];
                }
            }
        }
    }

    function refreshComponent(ref,showComp){
        ref[showComp] = false;
        setTimeout(() => {
            ref[showComp] = true;
        }, 200);
    }

    function joinArraytoString(arr,join_term= ', ', add_and = true) {
        const input = arr;
        if(input.length == 0){
            return "";
        }
        else if(input.length == 1){
            return input[0];
        }
        if (add_and) {
            const last = input.pop();

            return  input.join(join_term) + ' and ' + last;
        }
        else {
            return input.join(join_term)
        }

    }

    function snakeCaseToString(key) {   // if input is abc_kbc output will be Abc Kbc
        var str =  key.replace(/_/g, " ");
        str = str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase()});
        return str;
    }

    function changeDateFormat(date,format = 'MM-DD-YYYY',desired_format='MMMM DD, YYYY'){
        if(moment(date,format).isValid())
            return moment(date,format).format(desired_format);
        else
            return "";
    }


    function canAny(all_permissions,check_permission){
        return true;
        return all_permissions.some(permission => check_permission.includes(permission));
    }

    function showPopMessage(msg="",title="",icon="success",timer='1500',showConfirmButton =false ,position='center'){
        if(timer != 0){
            Swal.fire({
                position: position,
                text:msg,
                icon: icon,
                title:title,
                showConfirmButton: showConfirmButton,
                timer: timer,
            });
        }
        else{
            Swal.fire({
                position: position,
                text:msg,
                icon: icon,
                title:title,
                showConfirmButton: showConfirmButton,
            });
        }

    }

    function showConfirmationPopMessage(title='Do you want to save the changes?',callback,showDenyButton=true,showCancelButton=true,confirmButtonText='Yes',denyButtonText="No",allowOutsideClick=true,allowEscapeKey=true){
        Swal.fire({
            title: title,
            showDenyButton: showDenyButton,
            showCancelButton: showCancelButton,
            confirmButtonText: confirmButtonText,
            denyButtonText: denyButtonText,
            allowOutsideClick: allowOutsideClick,
            allowEscapeKey:allowEscapeKey,
            customClass: {
              cancelButton: 'order-1 right-gap',
              confirmButton: 'order-2',
              denyButton: 'order-3',
            }
          }).then((result) => {
            if (result.isConfirmed) {
                callback(true);
            } else if (result.isDenied) {
                callback(false);
            }
          })
    }


    return {
        base_url,
        isLinkActive,
        joinArraytoString,
        refreshComponent,
        copyProperties,
        snakeCaseToString,
        changeDateFormat,
        canAny,
    }
}
