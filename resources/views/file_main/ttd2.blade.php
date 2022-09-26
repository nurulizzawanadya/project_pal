<!DOCTYPE html>
<html>
<head>
    <title> TTD COBA AJA </title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
  
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
  
    <style>
        .kbw-signature { width: 100%; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>
  
</head>
<body class="bg-dark">
<div class="container">
   <div class="row">
       <div class="col-md-6 offset-md-3 mt-5">
           <div class="card">
               <div class="card-header">
                   <h5> Tanda Tangan Officer </h5>
               </div>
               <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                            <strong>Harap URL Image addres di copy lalu di paste pada textbox yang tersedia pada field ttd<br>
                            {{ $message }}</strong>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('signature') }}">

                        @csrf
                        <div class="col-md-12">
                            <label class="" for="">Tanda tangan disini:</label>
                            <br/>
                            <div id="sig" ></div>
                            <br/>
                            <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                        </div>
                        <br/>
                        <button class="btn btn-primary">Save</button>
                        <a class="btn btn-dark" href="{{url('/helpdesk/edit/' .$admin->id_helpdesk )}}">Close</a>
                        <div class="col-sm-5">
            


                        <!--requirement-->
                        
                    </form>
                </div>
                <!-- <br/>
                 @if ($message = Session::get('success'))
                        <div class="alert alert-success  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                            <strong>
                            {{ $message }}</strong>
                        </div>
                    @endif
                <form method="POST" action="/uploadttd4/{{ $admin->id }}">
                    {{ csrf_field() }}
                     <label class="" for="">Submit TTD disini</label>
                            <br/>
                   <div class="col-sm-12">
            
            <input type="text" name="ttd" required="required" class="form-control" value="<?php $signature ?>">
            <br>

             <div class="col-sm-5">
         <input type="hidden" name="id_helpdesk" required="required" class="form-control" value="{{ $admin->id_helpdesk }}" readonly>
     </div>
        <div class="col-sm-5">
            <input type="hidden" name="nip" required="required" value="{{ $admin->nip }}" class="form-control" readonly>
        </div>
        <div class="col-sm-5">
            <input type="hidden" name="id_divisi" required="required" value="{{ $admin->id_divisi }}" class="form-control" readonly>
        </div>
         <div class="col-sm-5">
              <input type="hidden" name="id_departmen" required="required" value="{{ $admin->id_departmen }}" class="form-control" readonly>
        </div>
        <div class="col-sm-5">
            <input type="hidden" name="tgl_pengajuan" required="required" value="{{ $admin->tgl_pengajuan }}" class="form-control" readonly>

        </div>
        
        <div class="col-sm-5">
            <input type="hidden" name="telp_ext" required="required" value="{{ $admin->telp_ext }}" class="form-control" readonly>
        </div>
        
        <div class="col-sm-5">
             <input type="hidden" name="ket_masalah" required="required" value="trouble" class="form-control" readonly value="{{ $admin->ket_masalah }}">

        </div>
        <div class="col-sm-5">
            <input type="hidden" name="trouble" required="required" value="trouble" class="form-control" readonly value="{{ $admin->trouble }}">
        </div>
        <div class="col-sm-5">
            <input type="hidden" name="foto_awal" required="required" value="{{ $admin->foto_awal}}" class="form-control" readonly="">
            
        </div>
        <div class="col-sm-5">
            <input type="hidden" name="id_detail" required="required" value="{{ $admin->id_detail }}" class="form-control" readonly="">
        </div>
        <div class="col-sm-5">
            <input type="hidden" name="tgl_selesai" required="required" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>" >
        </div>
         <div class="col-sm-5">

             <input type="hidden" name="rating" required="required" class="form-control" value="{{ $admin->rating }}" >
        </div>
        <div class="col-sm-5">
             <input type="hidden" name="solved" required="required" class="form-control" value="{{ $admin->solved }}">
           
        </div>
        <div class="col-sm-5">
            
            <input type="hidden" name="ttd" required="required" class="form-control" value="{{ $admin->ttd }}">
        </div>
        <div class="col-sm-5">
            
            <input type="hidden" name="officer" required="required" class="form-control" value="{{ $admin->officer }}">

        </div>
        
        <div class="col-sm-5">
            
            <input type="hidden" name="foto_akhir" id="foto_akhir" class="form-control" value="{{ $admin->foto_akhir }}" readonly="">
            
        </div>
        <div class="col-sm-5">
            
            <input type="hidden" name="status" value="{{ $admin->status }}" > 
        </div>
        </div>
        <input type="submit" name="simpan" class="btn btn-primary">
                </form> -->
               </div>
           </div>
       </div>
   </div>
</div>

<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>

</body>
</html>