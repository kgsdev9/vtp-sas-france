@extends('layout.app')

@section('content')

<main>

    <!-- =======================
    Main contain START -->
    <section class="py-4">
        <div class="container">
        <div class="row pb-4">
                <div class="col-12">
            <!-- Title -->
                        <h1 class="mb-0 h2">Commander L'article </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Chart START -->
                    <div class="card border">
                        <!-- Card body -->
                        <div class="card-body">
                <!-- Form START -->
                <form>
                  <!-- Main form -->
                  <div class="row">
                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Post name</label>
                        <input required="" id="con-name" name="name" type="text" class="form-control" placeholder="Post name">
                        <small>Moving heaven divide two sea female great midst spirit</small>
                      </div>
                    </div>
                    <!-- Post type START -->
                    <div class="col-12">
                      <div class="mb-3">
                        <label class="form-label">Post type</label>
                        <div class="d-flex flex-wrap gap-3">
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" id="option">
                            <label class="btn btn-outline-light w-100" for="option">
                              <i class="bi bi-chat-left-text fs-1"></i>
                              <span class="d-block"> Post </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" id="option2">
                            <label class="btn btn-outline-light w-100" for="option2">
                                <i class="bi bi-patch-question fs-1"></i>
                              <span class="d-block"> Question </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" id="option3" checked="">
                            <label class="btn btn-outline-light w-100" for="option3">
                              <i class="bi bi-chat-right-dots fs-1"></i>
                              <span class="d-block"> Poll </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" id="option4">
                            <label class="btn btn-outline-light w-100" for="option4">
                              <i class="bi bi-ui-checks-grid fs-1"></i>
                              <span class="d-block"> Images </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" id="option5">
                            <label class="btn btn-outline-light w-100" for="option5">
                              <i class="bi bi-camera-reels fs-1"></i>
                              <span class="d-block"> Video </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" id="option6">
                            <label class="btn btn-outline-light w-100" for="option6">
                              <i class="bi bi-chat-square fs-1"></i>
                              <span class="d-block"> Other </span>
                            </label>
                          </div>
                        <!-- Post type item -->
                      </div>
                    </div>
                  </div>
                  <!-- Post type END -->

                  <!-- Short description -->
                  <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label">Short description </label>
                        <textarea class="form-control" rows="3" placeholder="Add description"></textarea>
                    </div>
                  </div>


                    <div class="col-12">
                      <div class="mb-3">
                      <!-- Image -->
                      <div class="position-relative">
                        <h6 class="my-2">Upload post image here, or<a href="#!" class="text-primary"> Browse</a></h6>
                        <label class="w-100" style="cursor:pointer;">
                          <span>
                            <input class="form-control stretched-link" type="file" name="my-image" id="image" accept="image/gif, image/jpeg, image/png">
                          </span>
                        </label>
                      </div>
                      <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <!-- Tags -->
                      <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <textarea class="form-control" rows="1" placeholder="business, sports ..."></textarea>
                        <small>Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g. javascript, react, marketing.</small>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <!-- Message -->
                      <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">Lifestyle</option>
                          <option value="1">Technology</option>
                          <option value="2">Travel</option>
                          <option value="3">Business</option>
                          <option value="4">Sports</option>
                          <option value="5">Marketing</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="postCheck">
                        <label class="form-check-label" for="postCheck">
                          Make this post featured?
                        </label>
                      </div>
                    </div>
                    <!-- Create post button -->
                    <div class="col-md-12 text-start">
                      <button class="btn btn-primary w-100" type="submit">Create post</button>
                    </div>
                  </div>
                </form>
                <!-- Form END -->
                        </div>
                    </div>
                    <!-- Chart END -->
                </div>

                <div class="col-md-6">
                    <div>
                        <!-- Coupon code START -->
                        <div class="mb-4">
                            <h5 class="mb-2">Enter Coupon Code</h5>
                            <!-- Input group -->
                            <div class="input-group">
                                <input class="form-control form-control" placeholder="Coupon code">
                                <button type="button" class="btn btn-dark">Apply</button>
                            </div>
                            <small>20% Off Discount</small>
                        </div>
                        <!-- Coupon code END -->

                        <!-- Order summary START -->
                        <div class="card bg-light border border-secondary border-opacity-25 rounded-2 p-4">
                            <!-- card header -->
                            <div class="card-header bg-light p-0 pb-3">
                                <h5 class="card-title mb-0">Order Summary</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-0 pb-3">
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Subtotal</span>
                                        <span class="h6 mb-0">$260.54</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Service Charge</span>
                                        <span class="h6 mb-0">-$50</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Tax</span>
                                        <span class="h6 mb-0">$10</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-light border-top p-0 pt-3">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span>Payable Now</span>
                                    <span class="h5 mb-0">$210.54</span>
                                </div>

                                <!-- Button -->
                                <div class="d-grid"><a href="#" class="btn btn-primary mb-0">Place Order</a></div>
                            </div>
                        </div>
                        <!-- Order summary END -->
                        <p class="small mb-0 text-center mt-2">By completing your purchase, you agree to these <a href="#">Terms of Service</a></p>
                    </div>
                </div>
        </div>
        </div>
    </section>
    <!-- =======================
    Main contain END -->

    </main>


@endsection
