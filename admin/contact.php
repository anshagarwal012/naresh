<?php
$t = 'Contact';
require('header.php');
?>
<!-- Main Content Wrapper -->
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
        <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
            Contact
        </h2>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <!-- From HTML Table -->
        <div class="card py-4">
            <div>
                <div x-data x-init="$el._x_grid =  new Gridjs.Grid({
                from: $refs.table,
                sort: true,
                search: true,
              }).render($refs.wrapper);">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table x-ref="table" class="w-full text-left">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        #
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Name
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Job
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Favorite Color
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        ID 1
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Cy Ganderton
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Quality Control Specialist
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Blue
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        ID 2
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Hart Hagerty
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Desktop Support Technician
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Purple
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        ID 3
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Brice Swyre
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Tax Accountant
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">Red</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        ID 4
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Marjy Ferencz
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Office Assistant I
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        Crimson
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div x-ref="wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require('footer.php');
