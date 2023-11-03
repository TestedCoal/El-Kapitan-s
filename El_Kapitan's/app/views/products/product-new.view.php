<?php require views_path('partials/header');?>

    <div class="container-fluid border rounded p-2 m-2 col-lg-4 mx-auto">
        <form method="post">
            <fieldset>

            <!-- Form Name -->
            <legend class="mx-4 my-4 "> <i class="fa-solid fa-mug-hot"></i>ADD PRODUCTS</legend>

            <!-- description-->
            <div class="form-group">
            <label class="md-4 mx-4 form-label" for="productControlInput1">PRODUCT NAME</label>  
                <div class="md-4 mx-4">
                    <input id="productControlInput1" name="description" placeholder="Product name" class="form-control input-md" required="" type="text">
                </div>
            </div>

            <!-- quantity and price-->
            <div class="mx-4 my-4">
                <div class="input-group">
                    <span class="input-group-text">Qty:</span>
                    <input name="qty" value="1" type="number" class="form-control" placeholder="Quantity" aria-label="Quantity">
                    <span class="input-group-text">Price:</span>
                    <input name="amount" value="0.00" step="0.05" type="number" class="form-control" placeholder="Amount" aria-label="Amount">
                </div>
            </div>
                
            <!-- Image -->
            <div class="mx-4 mb-4">
                <label for="formFile" class="form-label">PRODUCT IMAGE</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="mt-2 mb-4 mx-4">
                    <button class="btn btn-danger float-end">Save</button>
                    <button type="button" class="btn btn-primary">Cancel</button>
                </div>
            </div>
            </fieldset>
        </form>
    </div>
    

<?php require views_path('partials/footer');?>