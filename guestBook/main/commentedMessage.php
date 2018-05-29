<!-- Button trigger modal -->
<script type="text/javascript">
  $(window).on('load',function(){
    //window.scrollTo(0,1020);
    $('html, body').animate({scrollTop:1400}, 'slow');
    //$('#exampleModalCenter').modal('show');
  });
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalCenterTitle"> You commented</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark text-light">
       <h2 class="lead">Your comment has been successfully added.. Thank you for your time...!</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>