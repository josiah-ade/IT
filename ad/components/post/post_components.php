<div class="diverx">
          <button id="modalex" type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#myModal"></button>
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-xl molaket">
              <div class="modal-content h-100">
                <iframe height="100%" width="100%" src="images?crack=<?php echo $_COOKIE['LTRU']?>&pack=<?php echo $_COOKIE['LTRUSES']?>" id="iframeTager"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="diverximgtitle">
          <button id="modalex3" type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#myModalimgtitle"></button>
          <div class="modal fade" id="myModalimgtitle">
            <div class="modal-dialog modal-l molaket1">
              <div class="modal-content h-100">
                <div class="modal-header">
                  <h4 class="modal-title">Add Image Title</h4>
                  <button type="button" id="clickImgTitleB" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body modalexer4">
                  <div class="form-group">
                    <label for="email">Image Title</label>
                    <input type="text" class="form-control" placeholder="Img Title" id="enteredTitle">
                  </div>
                </div>
                 <div class="modal-footer justify-content-between">
                  <button type="button" id="clickImgTitleN" class="btn btn-primary" disabled>Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="diverxone">
          <button id="modalex2" type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#myModal2"></button>
          <div class="modal fade" id="myModal2">
            <div class="modal-dialog modal-xl molaket2">
              <div class="modal-content h-100">
                <div class="modal-header">
                  <h4 class="modal-title">Upload Image</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <input id="callExtUrl" class="d-none" type="text" value="<?php echo THIRD_PARTY_IMAGE_URL?>" />
                </div>
                <div class="modal-body modalexer5">
                  <div class="row">
                    <div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                      <div id="appenerForImage" class="row">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 ">
                          <form id="formSubmitUploader" method="post" enctype="multipart/form-data">
                            <div class="divclicker" id="divClicker">
                              <i class="fas fa-plus"></i>
                            </div>
                            <input type="text" class="d-none" name="collectedImgTitle" id="collectedImgTitle" />
                            <input type="file" id="uploadImageIframe" class="d-none" name="uploadImage" accept="image/x-png,image/gif,image/jpeg"/>
                            <button type="submit" name="submit" id="submitUploader" class="d-none"></button>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                    <div id="divPrepender" class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 divclassprepe"></div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" id="selectUploadedImage" class="btn btn-primary" disabled>Select</button>
                </div>
              </div>
            </div>
          </div>
        </div>