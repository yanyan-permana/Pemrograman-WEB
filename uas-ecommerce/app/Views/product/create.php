<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
<div id="wrapper">
    <div id="page-wrapper" class="gray-bg" style="width: 100%;">
        <!-- Navigation -->
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Create Product</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Product</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Create</a>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Content -->
        <div class="wrapper wrapper-content animated fadeInRight mb-3">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            Create Product
                        </div>
                        <div class="card-body">
                            <?php $validation = \Config\Services::validation();
                            helper('form'); ?>
                            <form action="/create" method="post">
                                <div class="form-group row">
                                    <label for="product_id" class="col-md-2 col-form-label">Product Id <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="product_id" class="form-control" id="product_id" value="<?= set_value('product_id') ?>">
                                        <?php if ($validation->getError('product_id')) { ?>
                                            <span class="text-danger">
                                                <?= $error = $validation->getError('product_id'); ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="product_name" class="col-md-2 col-form-label">Product Name <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="product_name" class="form-control" id="product_name" value="<?= set_value('product_name') ?>">
                                        <?php if ($validation->getError('product_name')) { ?>
                                            <span class="text-danger">
                                                <?= $error = $validation->getError('product_name'); ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="product_category" class="col-md-2 col-form-label">Product Category</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="product_category" id="product_category">
                                            <option value="Skin Care" <?= set_value('product_category') == "Skin Care" ? 'selected' : '' ?>>Skin Care</option>
                                            <option value="Elektronik" <?= set_value('product_category') == "Elektronik" ? 'selected' : '' ?>>Elektronik</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="product_origin" class="col-md-2 col-form-label">Product Origin <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="product_origin" class="form-control" id="product_origin" value="<?= set_value('product_origin') ?>">
                                        <?php if ($validation->getError('product_origin')) { ?>
                                            <span class="text-danger">
                                                <?= $error = $validation->getError('product_origin'); ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="product_description" class="col-md-2 col-form-label">Description <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="product_description" id="product_description">
                                        <?= set_value('product_description') ?>
                                        </textarea>
                                        <?php if ($validation->getError('product_description')) { ?>
                                            <span class="text-danger">
                                                <?= $error = $validation->getError('product_description'); ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="quantity" class="col-md-2 col-form-label">Quantity <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="number" name="quantity" class="form-control" id="quantity" value="<?= set_value('quantity') ?>">
                                        <?php if ($validation->getError('quantity')) { ?>
                                            <span class="text-danger">
                                                <?= $error = $validation->getError('quantity'); ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="price" class="col-md-2 col-form-label">Price <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="price" value="<?= set_value('price') ?>">
                                        <input type="hidden" name="price" id="price1" value="<?= set_value('price') ?>">
                                        <?php if ($validation->getError('price')) { ?>
                                            <span class="text-danger">
                                                <?= $error = $validation->getError('price'); ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-md-2 col-form-label">Status</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="status" id="status">
                                            <option value="1" <?= set_value('status') == "1" ? 'selected' : '' ?>>Active</option>
                                            <option value="0" <?= set_value('status') == "0" ? 'selected' : '' ?>>Not Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <a href="/" class="btn btn-light">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> STT YBSI Tasikmalaya &copy; 2010-Current
            </div>
        </div>
    </div>
</div>

<script>
    var price = document.getElementById('price');
    var price1 = document.getElementById('price1');
    price.addEventListener('keyup', function(e) {
        price.value = formatRupiah(this.value);
        price1.value = price.value.split('.').join('');
    });
    /* Fungsi */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
<?= $this->endSection() ?>