<div>

    @extends('layout.app')

    @section('content')

    <main>

        <section class="section-box mt-30">
            <div class="container">
              <div class="content-page">

                <div class="row">

                    @foreach ($transporteur as $value)


                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                            <figure><img alt="jobBox" src="{{asset('assets/images/events/category/1.jpg')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="candidate-details.html">
                            <h5>KGS DISTRIBUTION</h5></a><span class="font-xs color-text-mutted">{{$value->name}}</span>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2"> {{$value->description}}</p>

                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i>


                                    <input type="text" name="teste" value="{{$ressource->slug}}">
                                    <a href=""></a>
                            </span>
                        </form>
                        </div>
                            <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">{{$value->price}} € </span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach




                </div>
              </div>

            </div>
          </section>



        </main>


    @endsection




</div>
