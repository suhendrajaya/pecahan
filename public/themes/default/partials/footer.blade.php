<footer>
   <div class="pull-right">
      {!! Theme::getTitle() !!}
   </div>
   <div class="clearfix"></div>
</footer>

<div class="modal fade" tabindex="-1" role="dialog" id="ajaxModal">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <p class="text-center"><img src="{{asset('assets/images/loading.gif')}}" /><br> Please Wait</p>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="ajaxYear">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Ganti Tahun Anggaran</h4>
         </div>
         <div class="modal-body">
            <form method="POST" action="{{url('year')}}">
               {{csrf_field()}}

               <div class="row">
                  <div class="col-sm-5">
                     <select name="year" class="form-control" class="col-sm-12" >
                        <option value="2017" >Tahun Anggaran 2017</option>
                        <option value="2018">Tahun Anggaran 2018</option>
                        <option value="2019">Tahun Anggaran 2019</option>
                     </select>
                  </div>
                   <div class="col-sm-3">
                     <select name="version" class="form-control" class="col-sm-12" >
                        <option value="Initial">Initial</option>
                        
                     </select>
                  </div>

              
                  <div class="col-sm-4">
                     <button class="btn btn-primary" class="col-sm-4" type="submit">Ganti Tahun Anggaran</button>
                  </div>
               </div>
            </form>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- /footer content -->
</div>
</div>