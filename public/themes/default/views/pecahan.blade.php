<div>
   <a class="hiddenanchor" id="signup"></a>
   <a class="hiddenanchor" id="signin"></a>

   <div class="login_wrapper">
      <div class="animate form login_form">
         <section class="login_content">
            <form method="POST" action="{{  route('pecahan-hitung') }} ">
               <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
               <h2 style="font-size: 30px"><i class="fa fa-medkit"></i> Pecahan</h2>   
               @if (isset($data["message"]) && !empty($data["message"]))
               <div class="pb10">
                  <ul style="color: #ff0000;">
                     <li>{!! $data["message"] !!}</li>
                  </ul>
               </div>
               @endif

               <div>
                  <input type="text" name="money" class="form-control" value="@if (isset($data) && !empty($data['money'])) {!! $data['money'] !!}  @endif" placeholder="Masukan sejumlah uang" required="" />
               </div>
               <div>

               </div>



               <div>
                  <input type="submit" class="btn btn-default" value="Pecahkan"/>
               </div>
                              <div class="clearfix"></div>

               @if (isset($data) && count($data["data"]) > 0)
               <div>
                  <ul style="color: #0000ff;">
                     @foreach($data["data"] as $val)
                     <li>{!! $val["jumlah"] !!}x  {!! $val["pecahan"] !!} </li>
                     @endforeach
                  </ul>
               </div>
               @endif
               
               <div class="clearfix"></div>

               <div class="separator">

                  <div class="clearfix"></div>
                  <br />

                  <div>

                     <p>©2019 All Rights Reserved.</p>
                  </div>
               </div>
            </form>
         </section>
      </div>

   </div>
</div>