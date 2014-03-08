    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginPopup" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">Login to the team member area. If you are not a part of the team, Talk to Mr. Crum in room 222.<strong>This has not yet been implemented, so it does nothing.</strong><hr>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form class="form form-inline">
                  <div id="error-Wrapper"></div>
                  <div class="form-group">
                    <label class="control-label" for="FName">username</label>
                    <input type="text" class="form-control" disabled="disabled" id="User" placeholder="Username...">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="LName">password</label>
                    <input type="password" class="form-control" disabled="disabled" id="Pass" placeholder="Password..">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="btn-group">
              <button type="button" class="btn btn-default" disabled="disabled" onclick="Error()">Login</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="HideLoginModal()">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
