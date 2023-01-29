<?php
$t = 'Membership';
require('header.php');
?>
<!-- Main Content Wrapper -->
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
        <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
            Membership
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
                pagination: true,
                  pagination: {
                        limit: 50
                    },
              }).render($refs.wrapper);">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table x-ref="table" class="w-full text-left">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        #
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Date Time
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Startup Name
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Founder Name
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Email address
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Phone Number
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Position
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Startup Description
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Industry
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Website
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Country
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Startup Stage
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Funding Stage
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Pitch Deck
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Supporting Documents
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM funding order by id desc";
                                $result = mysqli_query($conn, $sql);
                                echo '<input type="hidden" class="data" value="' . str_replace('"', "'", json_encode(mysqli_fetch_All($result))) . '">';
                                $result = mysqli_query($conn, $sql);
                                $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                                if ($result) {
                                    $s = 1;
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $s ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['datetime'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['sname'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['fname'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['email'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['phone'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['position'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['startupdesc'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['industry'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['website'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['country'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['stage'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['funding'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <a class="btn bg-primary text-white" href="<?= $protocol . $_SERVER['HTTP_HOST'] . '/' . $row['pitch_desk'] ?>" download="">Download</a>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <a class="btn bg-primary text-white" href="<?= $protocol . $_SERVER['HTTP_HOST'] . '/' . $row['sdocuments'] ?>" download="">Download</a>
                                                </td>
                                            </tr>
                                <?php
                                            $s++;
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-2">
                        <div x-ref="wrapper"></div>
                        <a class="btn bg-primary text-white" onclick="tableToCSV()">Export CSV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require('footer.php');
