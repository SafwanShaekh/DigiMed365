<?php
include('layout/header.php');
include('../config.php');
$msg = "";
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $fetch = "SELECT * FROM vault WHERE `file_id` = '$id'";
    $result = mysqli_query($conn, $fetch);
    $row = mysqli_fetch_array($result);
    $file_name = $row['file_name'];
    $file_type = $row['file_extension'];
    $delete_date = date('Y-m-d');
    $deleted_items = "INSERT INTO `deleted_items`(`item_name`, `item_type`, `deletion_date`) VALUES ('$file_name','$file_type','$delete_date')";
    $deleted_itemsresult = $conn->query($deleted_items);
    $delete = "DELETE vault FROM vault WHERE `file_id` = '$id'";

    $result = $conn->query($delete);
}

$fetch = "SELECT * FROM `deleted_items`";
$result = $conn->query($fetch);


?>
<!-- main content begins here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="file-manager-sidebar">
                    <div class="p-3 d-flex flex-column h-100">
                        <div class="mb-3">
                            <h5 class="mb-0 fw-semibold fs-16">My Vault</h5>
                        </div>
                        <div class="search-box">
                            <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                        <div class="mt-3 mx-n4 px-4 file-menu-sidebar-scroll" data-simplebar="init">
                            <div class="simplebar-wrapper" style="margin: 0px -24px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden;">
                                            <div class="simplebar-content" style="padding: 0px 24px;">
                                                <ul class="list-unstyled file-manager-menu">
                                                    <li>
                                                        <a data-bs-toggle="collapse" href="vault.php" role="button" aria-expanded="true" aria-controls="collapseExample">
                                                            <i class="ri-folder-2-line align-bottom me-2"></i> <span class="file-list-link">
                                                                <a href="vault.php">My Drive</a>
                                                            </span>
                                                        </a>
                                                        <div class="collapse show" id="collapseExample">
                                                            <ul class="sub-menu list-unstyled">
                                                                <!-- <li>
                                                        <a href="#!">Assets</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">Marketing</a>
                                                    </li> -->

                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="documents.php"><i class="ri-file-list-2-line align-bottom me-2"></i> <span class="file-list-link">Documents</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="media.php"><i class="ri-image-2-line align-bottom me-2"></i> <span class="file-list-link">Media</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="qr-code.php"><i class="ri-qr-code-line align-bottom me-2"></i> <span class="file-list-link">QR-code</span></a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="removed_files.php"><i class="ri-delete-bin-line align-bottom me-2"></i> <span class="file-list-link">Deleted</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 398px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="file-manager-content w-100 p-3 py-0">
                    <div class="mx-n3 pt-4 px-4 file-manager-content-scroll" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -24px -24px 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 24px 24px 0px;">
                                            <div id="folder-list" class="mb-2">
                                                <div class="row justify-content-beetwen g-2 mb-3">

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-4">
                                                            <h5 class="card-title flex-grow-1 mb-0">My Drive</h5>
                                                            <div class="flex-shrink-0">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div>
                                                        <?php echo ($msg) ?>
                                                        <form action="delete.php" method="post">
                                                            <button type="submit" name="submit" class="btn btn-danger">Delete All Forever</button>

                                                        </form>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="tab-pane fade active show" id="documents" role="tabpanel">
                                                        <div class="card" style="box-shadow:none;">
                                                            <div class="card-body" style="padding:20px 0px;">

                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-borderless align-middle mb-0">
                                                                                <thead class="table-light">
                                                                                    <tr>
                                                                                        <th scope="col">Name</th>
                                                                                        <th scope="col">Type</th>
                                                                                        <th scope="col">Upload Date</th>
                                                                                        <th scope="col">Action</th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                    <?php
                                                                                    if ($result->num_rows > 0) {
                                                                                        while ($row = $result->fetch_assoc()) {

                                                                                    ?>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <div class="avatar-sm">
                                                                                                            <div class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                                                                <i class="ri-folder-line"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ms-3 flex-grow-1">
                                                                                                            <h6 class="fs-15 mb-0">
                                                                                                                <a href="javascript:void(0)">
                                                                                                                    <?php echo ($row['item_name']); ?>
                                                                                                                </a>
                                                                                                            </h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php
                                                                                                    $filename = $row['item_name'];
                                                                                                    $extension = pathinfo($filename, PATHINFO_EXTENSION);
                                                                                                    echo ($extension);
                                                                                                    ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo ($row['deletion_date']); ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="dropdown">
                                                                                                        <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                                            <i class="ri-equalizer-fill"></i>
                                                                                                        </a>
                                                                                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15">

                                                                                                            <li><a class="dropdown-item" href="delete.php?id=<?php echo ($row['item_id']); ?>"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                    <?php }
                                                                                    } ?>


                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="text-center mt-3">
                                                                            <a href="javascript:void(0);" class="text-success "><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i>
                                                                                Load more </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end row-->

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 686px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar" style="height: 415px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>
                <div class="file-manager-detail-content p-3 py-0">
                    <div class="mx-n3 pt-3 px-3 file-detail-content-scroll" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -16px -16px 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 16px 16px 0px;">
                                            <div id="folder-overview">
                                                <div class="d-flex align-items-center pb-3 border-bottom border-bottom-dashed">
                                                    <h5 class="flex-grow-1 fw-semibold mb-0">Overview</h5>
                                                    <div>
                                                        <button type="button" class="btn btn-soft-danger btn-icon btn-sm fs-16 close-btn-overview">
                                                            <i class="ri-close-fill align-bottom"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="simple_dount_chart" data-colors="[&quot;--vz-info&quot;, &quot;--vz-danger&quot;, &quot;--vz-primary&quot;, &quot;--vz-success&quot;]" class="apex-charts mt-3" dir="ltr" style="min-height: 330px;">
                                                    <div id="apexchartswyqq6tma" class="apexcharts-canvas apexchartswyqq6tma" style="width: 0px; height: 330px;"><svg id="SvgjsSvg1034" width="0" height="330" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                            <g id="SvgjsG1037" class="apexcharts-annotations"></g>
                                                            <g id="SvgjsG1036" class="apexcharts-inner apexcharts-graphical">
                                                                <defs id="SvgjsDefs1035"></defs>
                                                            </g>
                                                        </svg>
                                                        <div class="apexcharts-legend"></div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <ul class="list-unstyled vstack gap-4">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-xs">
                                                                        <div class="avatar-title rounded bg-soft-secondary text-secondary">
                                                                            <i class="ri-file-text-line fs-17"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h5 class="mb-1 fs-15">Documents</h5>
                                                                    <p class="mb-0 fs-12 text-muted">2348 files</p>
                                                                </div>
                                                                <b>27.01 GB</b>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-xs">
                                                                        <div class="avatar-title rounded bg-soft-success text-success">
                                                                            <i class="ri-gallery-line fs-17"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h5 class="mb-1 fs-15">Media</h5>
                                                                    <p class="mb-0 fs-12 text-muted">12480 files</p>
                                                                </div>
                                                                <b>20.87 GB</b>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-xs">
                                                                        <div class="avatar-title rounded bg-soft-warning text-warning">
                                                                            <i class="ri-folder-2-line fs-17"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h5 class="mb-1 fs-15">Projects</h5>
                                                                    <p class="mb-0 fs-12 text-muted">349 files</p>
                                                                </div>
                                                                <b>4.10 GB</b>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-xs">
                                                                        <div class="avatar-title rounded bg-soft-primary text-primary">
                                                                            <i class="ri-error-warning-line fs-17"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h5 class="mb-1 fs-15">Others</h5>
                                                                    <p class="mb-0 fs-12 text-muted">9873 files</p>
                                                                </div>
                                                                <b>33.54 GB</b>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="pb-3 mt-auto">
                                                    <div class="alert alert-danger d-flex align-items-center mb-0">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-cloud-line text-danger align-bottom display-5"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h5 class="text-danger fs-14">Upgrade to Pro</h5>
                                                            <p class="text-muted mb-2">Get more space for your...</p>
                                                            <button class="btn btn-sm btn-danger"><i class="ri-upload-cloud-line align-bottom"></i>
                                                                Upgrade Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="file-overview" class="h-100">
                                                <div class="d-flex h-100 flex-column">
                                                    <div class="d-flex align-items-center pb-3 border-bottom border-bottom-dashed mb-3 gap-2">
                                                        <h5 class="flex-grow-1 fw-semibold mb-0">File Preview</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-sm fs-16 favourite-btn">
                                                                <i class="ri-star-fill align-bottom"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-soft-danger btn-icon btn-sm fs-16 close-btn-overview">
                                                                <i class="ri-close-fill align-bottom"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="pb-3 border-bottom border-bottom-dashed mb-3">
                                                        <div class="file-details-box bg-light p-3 text-center rounded-3 border border-light mb-3">
                                                            <div class="display-4 file-icon">
                                                                <i class="ri-file-text-fill text-secondary"></i>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-success float-end fs-16"><i class="ri-share-forward-line"></i></button>
                                                        <h5 class="fs-16 mb-1 file-name">html.docx</h5>
                                                        <p class="text-muted mb-0 fs-12"><span class="file-size">0.3
                                                                KB</span>, <span class="create-date">19 Apr, 2022</span>
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-12 text-uppercase text-muted mb-3">File
                                                            Description :</h5>

                                                        <div class="table-responsive">
                                                            <table class="table table-borderless table-nowrap table-sm">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" style="width: 35%;">File Name :
                                                                        </th>
                                                                        <td class="file-name">html.docx</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">File Type :</th>
                                                                        <td class="file-type">Documents</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Size :</th>
                                                                        <td class="file-size">0.3 KB</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Created :</th>
                                                                        <td class="create-date">19 Apr, 2022</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Path :</th>
                                                                        <td class="file-path">
                                                                            <div class="user-select-all text-truncate">
                                                                                *:\projects\src\assets\images</div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div>
                                                            <h5 class="fs-12 text-uppercase text-muted mb-3">Share
                                                                Information:</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless table-nowrap table-sm">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row" style="width: 35%;">Share
                                                                                Name :</th>
                                                                            <td class="share-name">\\*\Projects</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Share Path :</th>
                                                                            <td class="share-path">velzon:\Documents\
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-auto border-top border-top-dashed py-3">
                                                        <div class="hstack gap-2">
                                                            <button type="button" class="btn btn-soft-primary w-100"><i class="ri-download-2-line align-bottom me-1"></i>
                                                                Download</button>
                                                            <button type="button" class="btn btn-soft-danger w-100 remove-file-overview" data-remove-id="" data-bs-toggle="modal" data-bs-target="#removeFileItemModal"><i class="ri-close-fill align-bottom me-1"></i>
                                                                Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
</div>
<!-- main content ends here -->
<?php
include('layout/footer.php');
?>