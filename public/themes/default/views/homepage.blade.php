
<div class="container body">
   <div class="main_container">

      <!-- page content -->
      <div class="right_col" role="main">
         <div class="">
            <div class="page-title">
               <div class="title_left">
                  <h3>Summary</h3>
               </div>

               
            </div>

            <div class="clearfix"></div>

<div class="row">
    <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                  <div class="x_title">
                     <h2>Summary</h2>
                     
                     <div class="clearfix"></div>
                  </div>


                     <div class="clearfix"  style="margin-bottom: 15px;"></div>
                     <div class="row">
			<div class="col-lg-3">
				<h1>Total</h1>
				Total Transaksi : {{ number_format(@$total_transaksi->count, 0 , '' , '.' ) }}<br>
				Total Amount : {{ number_format(@$total_transaksi->price, 0 , '' , '.' ). ',-' }}
			</div>
			<div class="col-lg-5">
				<h1>Month To Date</h1>
				{!!date('01 M Y').'<br>'.date('d M Y').'<br><br>'!!}
				Total Transaksi: {{ number_format(@$total_transaksi_bulanan->count, 0 , '' , '.' ) }} <br> 
                                Total Amount: {{ number_format(@$total_transaksi_bulanan->price, 0 , '' , '.' ). ',-' }} 
			</div>
			<div class="col-lg-3">
				<h1>Year To Date</h1>
				{!!(date('Y')-1).' / '.date('Y').'<br><br>'!!}
				<b>Tahun Ini</b><br>
				Total Transaksi: {{ number_format(@$total_transaksi_tahunan->count, 0 , '' , '.' ) }} <br> 
                                Total Amount: {{ number_format(@$total_transaksi_tahunan->price, 0 , '' , '.' ). ',-' }} 

				<br><br><b>Tahun Lalu</b><br>
				Total Transaksi: {{ number_format(@$total_transaksi_tahun_lalu->count, 0 , '' , '.' ) }}  <br> 
                                Total Amount: {{ number_format(@$total_transaksi_tahun_lalu->price, 0 , '' , '.' ). ',-' }} 
			</div>
		</div>
		
                  </div>
                
               </div>
            
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Year {{date('Y')}} </h2>
                    <ul class="nav navbar-right panel_toolbox ">
                      <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Date</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price</th> 
                        </tr>
                      </thead>
                      <tbody>
                          <?php $i=1; ?>
                          @if(count(@$data_transaksi_tahunan))
                          @foreach(@$data_transaksi_tahunan as $dtt)
                        <tr>
                          <th scope="row">{{$i++}}</th>
                          <td>{{date('d M Y H:i:s', strtotime($dtt->created_at))}}</td>
                          <td>{{$dtt->product_name}}</td>
                          <td>{{$dtt->quantity}}</td>
                          <td>{{$dtt->price}}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5">No data found.</td>
                        </tr>
                        @endif
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Month {{date('F')}} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Date</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price</th> 
                        </tr>
                      </thead>
                      <tbody>
                          <?php $i=1; ?>
                          @if(count(@$data_transaksi_bulanan))
                          @foreach(@$data_transaksi_bulanan as $dtb)
                        <tr>
                          <th scope="row">{{$i++}}</th>
                          <td>{{date('d M Y H:i:s', strtotime($dtb->created_at))}}</td>
                          <td>{{$dtb->product_name}}</td>
                          <td>{{$dtb->quantity}}</td>
                          <td>{{$dtb->price}}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5">No data found.</td>
                        </tr>
                        @endif
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
                </div>
            
            
            </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /page content -->

</div>
</div>