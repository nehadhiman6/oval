
<script setup>
    import { Link } from '@inertiajs/vue3';
    import SideNavLink from '@/Pages/CustomComponents/Layout/SideNavLink.vue';
    import SideNavDropDown from '@/Pages/CustomComponents/Layout/SideNavDropDown.vue';
    import SideDropDownItemLink from '@/Pages/CustomComponents/Layout/SideDropDownItemLink.vue';
    import ProjectLogo from '@/Pages/CustomComponents/Others/ProjectLogo.vue';
    import globalMixin from '../globalMixin';
    const { isLinkActive,canAny} = globalMixin();
</script>
<template>
    <!-- sidebar -->
    <aside id="drawer-navigation" class="iw-sidebar fixed inset-y-0 flex-wrap items-center justify-between block p-0 my-4 overflow-y-auto overflow-x-hidden antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-[220px] ease z-50 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0">
        <ProjectLogo :href="$page.props.base_url +'/dashboard'">
        </ProjectLogo>
        <hr class="h-px mt-0 mb-4 opacity-25 border-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
        <div class="items-center block w-auto max-h-screen iw-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <SideNavLink :href="$page.props.base_url +'/dashboard'" icon="fa fa-tv" color-class="text-indigo-500" data-drawer-hide="drawer-navigation">
                        Dashboard
                    </SideNavLink>
                </li>
                <li class="mt-0.5 w-full" v-if="canAny($page.props.granted_permissions,['cities','states','companies','locations','formulas'])">
                    <SideNavDropDown id-name="masters" icon="fa fa-user" color-class="text-orange-500" :active="isLinkActive(['cities','states', 'companies','locations' ,'formulas'])">
                        Masters
                    </SideNavDropDown>
                    <ul id="masters" class="py-2 space-y-2 bg-primary/5"
                        v-bind:class="{'hidden':!isLinkActive(['cities','states', 'companies','locations','formulas'])}">
                        <SideDropDownItemLink v-if="canAny($page.props.granted_permissions,['cities'])" :href="$page.props.base_url +'/cities'" :active="isLinkActive(['cities'])" data-drawer-hide="drawer-navigation">
                            Cities
                        </SideDropDownItemLink>
                         <SideDropDownItemLink v-if="canAny($page.props.granted_permissions,['states'])" :href="$page.props.base_url +'/states'"  :active="isLinkActive(['states'])" data-drawer-hide="drawer-navigation">
                            States
                        </SideDropDownItemLink>
                        <SideDropDownItemLink v-if="canAny($page.props.granted_permissions,['companies'])" :href="$page.props.base_url +'/companies'"  :active="isLinkActive(['companies'])" data-drawer-hide="drawer-navigation">
                            Companies
                        </SideDropDownItemLink>
                         <SideDropDownItemLink v-if="canAny($page.props.granted_permissions,['locations'])" :href="$page.props.base_url +'/locations'"  :active="isLinkActive(['locations'])" data-drawer-hide="drawer-navigation">
                            Locations
                        </SideDropDownItemLink>
                         <SideDropDownItemLink v-if="canAny($page.props.granted_permissions,['formulas'])"  :href="$page.props.base_url +'/formulas'"  :active="isLinkActive(['formulas'])" data-drawer-hide="drawer-navigation">
                            Formulas
                        </SideDropDownItemLink>
                    </ul>
                </li>
                 <li class="mt-0.5 w-full"  v-if="canAny($page.props.granted_permissions,['allowances','deductions','sites','site-leaves','site-holidays'])"  >
                    <SideNavDropDown id-name="items" icon="fa fa-list" color-class="text-purple-500"  :active="isLinkActive(['allowances','deductions','site-leaves','site-holidays','sites','site-deduction-formula','site-deduction-formula','site-leaves','site-holidays'])">
                        Sites
                    </SideNavDropDown>
                    <ul id="items" class="py-2 space-y-2 bg-primary/5"
                         v-bind:class="{'hidden':!isLinkActive(['allowances','deductions','sites','site-leaves','site-holidays','site-deduction-formula','site-deduction-formula'])}"
                    >
                        <SideDropDownItemLink  v-if="canAny($page.props.granted_permissions,['sites','site-leaves','site-holidays'])" :href="$page.props.base_url +'/sites'"  :active="isLinkActive(['sites','site-leaves','site-holidays','site-deduction-formula','site-deduction-formula'])" >
                            Sites
                        </SideDropDownItemLink>
                        <SideDropDownItemLink  v-if="canAny($page.props.granted_permissions,['allowances'])" :href="$page.props.base_url +'/allowances'"  :active="isLinkActive(['allowances'])" >
                            Allowances
                        </SideDropDownItemLink>
                        <SideDropDownItemLink  v-if="canAny($page.props.granted_permissions,['deductions'])" :href="$page.props.base_url +'/deductions'"  :active="isLinkActive(['deductions'])" >
                            Deductions
                        </SideDropDownItemLink>
                    </ul>
                </li>
                <li class="mt-0.5 w-full"  v-if="canAny($page.props.granted_permissions,['employees','categories','departments','designations'])"  >
                    <SideNavDropDown id-name="employees" icon="fa fa-building-user" color-class="text-green-500"  :active="isLinkActive(['employees','categories','departments','designations'])">
                        Employees
                    </SideNavDropDown>
                    <ul id="employees" class="py-2 space-y-2 bg-primary/5"
                         v-bind:class="{'hidden':!isLinkActive(['employees','categories','departments','designations'])}"
                    >
                        <SideDropDownItemLink  v-if="canAny($page.props.granted_permissions,['categories'])" :href="$page.props.base_url +'/categories'"  :active="isLinkActive(['categories'])" >
                            Categories
                        </SideDropDownItemLink>
                        <SideDropDownItemLink  v-if="canAny($page.props.granted_permissions,['departments'])" :href="$page.props.base_url +'/departments'"  :active="isLinkActive(['departments'])" >
                            Departments
                        </SideDropDownItemLink>
                          <SideDropDownItemLink  v-if="canAny($page.props.granted_permissions,['designations'])" :href="$page.props.base_url +'/designations'"  :active="isLinkActive(['designations'])" >
                            Designations
                        </SideDropDownItemLink>
                    </ul>
                </li>
                <li class="mt-0.5 w-full">
                    <SideNavLink icon="fa fa-envelope" color-class="text-pink-500" v-if="canAny($page.props.granted_permissions,['letter'])" :href="$page.props.base_url +'/letter'"  :active="isLinkActive(['letter'])">
                        Letters
                    </SideNavLink>
                </li>
                <li class="mt-0.5 w-full"  v-if="canAny($page.props.granted_permissions,['accounts'])"  >
                    <SideNavDropDown id-name="maintenance" icon="fa fa-cog" color-class="text-indigo-500"  :active="isLinkActive(['accounts','items','banks','pfs'])">
                        Maintenance
                    </SideNavDropDown>
                    <ul id="maintenance" class="py-2 space-y-2 bg-primary/5"
                         v-bind:class="{'hidden':!isLinkActive(['accounts','items','banks','pfs'])}"
                    >
                        <SideDropDownItemLink  v-if="canAny($page.props.granted_permissions,['accounts'])" :href="$page.props.base_url +'/accounts'"  :active="isLinkActive(['accounts'])" >
                            Accounts
                        </SideDropDownItemLink>

                         <SideDropDownItemLink  v-if="canAny($page.props.granted_permissions,['items'])" :href="$page.props.base_url +'/items'"  :active="isLinkActive(['items'])" >
                            Items
                        </SideDropDownItemLink>

                        <SideDropDownItemLink v-if="canAny($page.props.granted_permissions,['banks'])" :href="$page.props.base_url +'/banks'"  :active="isLinkActive(['banks'])" >
                            Banks
                        </SideDropDownItemLink>

                        <SideDropDownItemLink v-if="canAny($page.props.granted_permissions,['invoice-term'])" :href="$page.props.base_url +'/invoice-term'"  :active="isLinkActive(['invoice-term'])" >
                            Invoice Term
                        </SideDropDownItemLink>

                        <SideDropDownItemLink v-if="canAny($page.props.granted_permissions,['pfs'])" :href="$page.props.base_url +'/pfs'"  :active="isLinkActive(['pfs'])" >
                            PF
                        </SideDropDownItemLink>
                    </ul>
                </li>
                <!-- <li class="mt-0.5 w-full" >
                      <SideNavDropDown id-name="accounts" icon="fa fa-calendar" color-class="text-cyan-500">
                        Items
                    </SideNavDropDown>
                    <ul id="accounts" class="py-2 space-y-2 bg-primary/5 hidden">
                      <SideDropDownItemLink :href="$page.props.base_url +'/cities'"  >
                            Cities
                        </SideDropDownItemLink>
                         <SideDropDownItemLink :href="$page.props.base_url +'/states'" >
                            States
                        </SideDropDownItemLink>
                         <SideDropDownItemLink :href="$page.props.base_url +'/countries'">
                            Countries
                        </SideDropDownItemLink>
                    </ul>
                </li> -->
                <!-- <li class="mt-0.5 w-full">
                    <SideNavLink :href="$page.props.base_url +' /dashboard'" icon="fa fa-credit-card" color-class="text-emerald-500">
                        Billing
                    </SideNavLink>
                </li> -->
                <li class="mt-0.5 w-full" v-if="canAny($page.props.granted_permissions,['users','roles','permissions'])">
                    <SideNavDropDown id-name="users" icon="fa fa-users" color-class="text-red-500" :active="isLinkActive(['users','roles','permissions'])">
                        Users & Roles
                    </SideNavDropDown>
                    <ul id="users" class="py-2 space-y-2 bg-primary/5"  v-bind:class="{'hidden':!isLinkActive(['users','roles','permissions'])}">
                       <SideDropDownItemLink v-if="canAny($page.props.granted_permissions,['users'])" :href="$page.props.base_url +'/users'"  :active="isLinkActive(['users'])">
                            Users
                        </SideDropDownItemLink>
                         <SideDropDownItemLink  v-if="canAny($page.props.granted_permissions,['roles'])"  :href="$page.props.base_url +'/roles'" :active="isLinkActive(['roles','permissions'])">
                            Roles
                        </SideDropDownItemLink>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    <!-- sidebar end  -->
</template>
<style>

</style>
