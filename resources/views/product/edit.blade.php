@extends('master.layout')
@section('content')
<div class="form-container">
        <div class="form-header">
            <h1>Edit Your Product</h1>
            <p>Update in the details below to edit your existing product</p>
        </div>
        
        <div class="form-body">
            <form id="productForm" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <!-- Product Name Field -->
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <div class="input-icon">
                        <input type="text" id="productName" placeholder="Enter product name" required name="name" value="{{$product->name}}">
                        <i class="fas fa-box"></i>
                    </div>
                </div>
                
                <!-- Price Field -->
                <div class="form-group">
                    <label for="productPrice">Price ($)</label>
                    <div class="input-icon">
                        <input type="number" id="productPrice" placeholder="Enter price" min="0" step="0.01" required name="price" value="{{$product->price}}">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
                
                <!-- Description Field -->
                <div class="form-group">
                    <label for="productDescription">Description</label>
                    <div class="input-icon">
                        <input id="productDescription" placeholder="Enter product description" required name="description" value="{{$product->description}}">
                        <i class="fas fa-pen"></i>
                    </div>
                </div>
                
                <!-- Image Upload Field -->
                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" class="file-input" id="productImage" accept="image/*" name="image">
                    <label for="productImage" class="file-label">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span>Click to upload image</span>
                        <p>PNG, JPG up to 5MB</p>
                    </label>
                    <div class="image-preview" id="imagePreview">
                        <img src="" alt="Image Preview">
                    </div>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="btn">
                    <i class="fas fa-plus-circle"></i> Update Product
                </button>
            </form>
        </div>
    </div>

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Image preview functionality
            const productImage = document.getElementById('productImage');
            const imagePreview = document.getElementById('imagePreview');
            
            productImage.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.style.display = 'block';
                        imagePreview.querySelector('img').setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Form submission
            const productForm = document.getElementById('productForm');
            
            productForm.addEventListener('submit', function(e) {
                
                // Simple form validation
                let isValid = true;
                const inputs = productForm.querySelectorAll('input, textarea');
                
                inputs.forEach(input => {
                    if (!input.value) {
                        isValid = false;
                        input.style.borderColor = 'red';
                    } else {
                        input.style.borderColor = '#e1e5eb';
                    }
                });
                
                if (isValid) {
                    // Here you would typically send data to server
                    // For demo purposes, we'll show a success message
                    alert('Product added successfully!');
                    productForm.reset();
                    imagePreview.style.display = 'none';
                }
            });
            
            // Remove validation on input
            const formInputs = productForm.querySelectorAll('input, textarea');
            
            formInputs.forEach(input => {
                input.addEventListener('input', function() {
                    if (this.value) {
                        this.style.borderColor = '#e1e5eb';
                    }
                });
            });
        });
    </script> -->
    @endsection