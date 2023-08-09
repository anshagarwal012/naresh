<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$t = 'Portfolio';
require('header.php');
$targetDirectory = "pf/";
$allowedExtensions = ["jpg", "jpeg", "png"];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES["file"])) {
        $file = $_FILES["file"];

        $filename = time() . basename($file["name"]);
        $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (in_array($fileExtension, $allowedExtensions)) {
            $uploadPath = $targetDirectory . $filename;

            if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
                $query = "INSERT INTO portfolio (filename) VALUES ('$filename')";
                if (mysqli_query($conn, $query)) {
?>
                    <script>
                        alert('Portfolio uploaded successfully.');
                        window.location.href = document.referrer;
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert('<?= "Error: " . $query . "<br>" . mysqli_error($conn) ?>');
                        window.location.href = document.referrer;
                    </script>
<?php
                }
                mysqli_close($conn);
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file type. Allowed extensions: " . implode(", ", $allowedExtensions);
        }
    }
}
?>
<!-- Main Content Wrapper -->
<main class="main-content w-full px-2 pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
        <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
            Portfolio
        </h2>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <h2 class="text-2xl font-bold mb-4">Upload an Image</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="flex items-center">
            <input type="file" name="file" accept="image/*" required class="flex-grow mr-2 py-2 px-4 border rounded-lg">
            <button type="submit" class="btn bg-primary text-white hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Upload</button>
        </form>
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
                                        Action
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        #
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Image
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Date Time
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM portfolio order by id desc";
                                $result = mysqli_query($conn, $sql);
                                // print_r($result);
                                // die;
                                $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                                echo '<script>
                                var dta = ' . json_encode(mysqli_fetch_All($result)) . '
                                </script>';
                                // echo '<input type="hidden" class="data" value="' . str_replace('"', "'", json_encode(mysqli_fetch_All($result))) . '">';
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    $s = 1;
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                            <tr>
                                                <td><input type="checkbox" class="multi_select" value="<?= $row['id'] ?>"></td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $s ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <img width="200px" src="<?= $protocol . $_SERVER['HTTP_HOST'] . '/admin/pf/' . $row['filename'] ?>" alt="">
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['uploaded_at'] ?>
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
                    <div>
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
