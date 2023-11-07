@include('header')
<div class="admin">


<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add New Product</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form -->
                <form action="/add-prod" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="post_title">Name</label>
                        <input type="text" name="name" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Price</label>
                        <input type="text" name="price" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Description</label>                       
                       <textarea name="description" id="" cols="50" rows="5"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="category" class="form-control">
                            <option > Select Category</option>
                            <option value="cloth" >Clothes</option>
                            <option value="electronis" >Electronics</option>
                            <option value="grocery" >Grocery</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Post image</label>
                        <input type="file" name="image" required>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                </form>
                <!--/Form -->
            </div>
        </div>
    </div>
</div>
</div>

@include('footer')