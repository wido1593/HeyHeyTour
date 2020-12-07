
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
           <div class="modal-header ">
            <h5 class="modal-title" id="exampleModalLabel">로그인</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>  </button>
           </div>

           <div class="modal-body bg-light" style="text-align:center">
            <form name="form_login" method="post" action="/~sale36/foodlogin/check">
              <div class="form-inline">
               아이디: &nbsp;&nbsp;
               <input type="text" name="uid" size="15" value=""  class="form-control form-control-sm">
              </div>
              <div style="height:10px"></div>
              <div class="form-inline">
               암&nbsp;&nbsp;호:&nbsp;&nbsp;
                  <input type="text" name="passwd" size="15" value=""  class="form-control form-control-sm">
              </div>
            </form>
           </div>
           <div class="modal-footer alert-secondary" style="text-align:center">
            <button type="button" class="btn btn-secondary btn btn-sm" onClick="javascript:form_login.submit();">확인</button>
            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">닫기</button>
           </div>
         </div>
      </div>
   </div>