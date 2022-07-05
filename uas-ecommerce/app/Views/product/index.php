<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
<div id="wrapper">
    <div id="page-wrapper" class="gray-bg" style="width: 100%;">
        <!-- Navigation -->
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Product List</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Product</a>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Content -->
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-12">
                    <?php if (session()->getFlashdata('message-succes') !== NULL) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo session()->getFlashdata('message-succes'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <!-- menu aksi -->
                <form action="" method="post">
                    <div class="col-sm-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <a href="/create" class="btn btn-white">New Product</a>
                            </div>
                            <div class="input-group-prepend">
                                <button tabindex="-1" class="btn btn-white" type="button" onclick="alert('under maintenance');">Search Filter</button>
                            </div>
                            <div class="input-group-prepend">
                                <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript::void(0)" id="check_all">Check All</a>
                                    </li>
                                    <li>
                                        <a href="javascript::void(0)" id="uncheck_all">Uncheck All</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript::void(0)" id="delete_all">Delete All (checked)</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript::void(0)" id="active_all">Make status "active" (checked)</a>
                                    </li>
                                    <li>
                                        <a href="javascript::void(0)" id="notactive_all">Make status "not active" (checked)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end menu aksi -->
                    <!-- tabel -->
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Product List</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product Id</th>
                                                <th>Product Name</th>
                                                <th>Product Category</th>
                                                <th>Product Origin</th>
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($products as $product) { ?>
                                                <tr>
                                                    <td><input type="checkbox" name="product" id="prod_id_<?= $row['product_id']; ?>" value="<?= $row['product_id']; ?>"></td>
                                                    <td><?= $product['product_id'] ?></td>
                                                    <td><?= $product['product_name'] ?></td>
                                                    <td><?= $product['product_category'] ?></td>
                                                    <td><?= $product['product_origin'] ?></td>
                                                    <td><?= $product['product_description'] ?></td>
                                                    <td><?= $product['quantity'] ?></td>
                                                    <td><?= number_format($product['price'], 0, ',', '.') ?></td>
                                                    <td><?= $product['status'] == '1' ? 'Active' : 'Not Actiive'  ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end tabel -->

            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> STT YBSI Tasikmalaya &copy; 2010-Current
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>