 <!-- Form Group -->
 <div class="form-group">
    <label for="product_name">Product Name</label>
    <input type="text" class="form-control" id="product_name" aria-describedby="product_name"
           placeholder="Product Name" name="product_name" value="{{ old('product_name',$product->product_name ?? '') }}" required>
    </small>
  </div>
  <!-- /form group -->

  <div class="form-group">
    <label for="qr_number">QR Number</label>
    <input type="text" class="form-control" id="qr_number" aria-describedby="qr_number"
           placeholder="QR Number" name="qr_number" value="{{ old('qr_number',$product->qr_number ?? '') }}">
  </div>


  <!-- Form Group -->
  <div class="form-group">
    <label for="product_description">Product Description</label>
    <textarea class="form-control" id="product_description" name="product_description" placeholder="Product Description">{{ old('product_description',$product->product_description ?? '') }}</textarea>
  </div>
  <!-- /form group -->

  <div class="form-group">
    <label for="product_image">Product Image</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="product_image" id="product_image" @if(!isset($product)) required @endif>
          <label class="custom-file-label" for="product_image">Choose file</label>
        </div>
      </div>
      @if(isset($product))
          <img src="{{ asset('storage') }}/{{  $product->product_image }}" alt="" height="100">
      @endif
  </div>


