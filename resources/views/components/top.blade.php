  <div class="topbar">
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="full">
              <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
              &nbsp;&nbsp;
              <div class="logo_section">

                  <img src="{{ asset('images/logo/image1.jpg') }}" alt="" width=100%;>
              </div>
              <div class="right_topbar">
                  <div class="icon_info">
                      <ul>
                          <li><a class="btn btn"><i class="fa fa-bell-o"></i><span class="badge"></span></a>
                          </li>

                          <li><a class="btn btn "data-toggle="modal" data-bs-toggle="modal"
                                  data-bs-target="#staticBackdrop"><i class="fa fa-envelope-o fa-w-16 "></i>
                                  <span class="badge"></span></a>
                          </li>
                      </ul>
                      <ul class="user_profile_dd">
                          <li>
                              <a class="dropdown-toggle" data-toggle="dropdown"><img
                                      class="img-responsive rounded-circle" src="{{ asset('images/logo/lion.png') }}"
                                      alt="#" /><span
                                      class="name_user">{{ optional(Auth()->user())->nom }}</span></a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{ route('profile') }}">Mon Profil</a>

                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <span>Log Out</span> <i class="fa fa-sign-out"></i>
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </nav>
  </div>


  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">ENVOYER L'EMAIL</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">....</button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="{{ route('send.mail') }}">
                      @csrf

                      <div class="form-group">
                          <label for="emailRecipient">Email To </label>
                          <input type="email" name="emailRecipient" id="emailRecipient" class="form-control"
                              placeholder="Mail To">
                      </div>

                      <div class="form-group">
                          <label for="emailCc">CC </label>
                          <input type="email" name="emailCc" id="emailCc" class="form-control"
                              placeholder="Mail CC">
                      </div>

                      <div class="form-group">
                          <label for="emailBcc">BCC </label>
                          <input type="email" name="emailBcc" id="emailBcc" class="form-control"
                              placeholder="Mail BCC">
                      </div>

                      <div class="form-group">
                          <label for="emailSubject">Subject </label>
                          <input type="text" name="emailSubject" id="emailSubject" class="form-control"
                              placeholder="Mail Subject">
                      </div>

                      <div class="form-group">
                          <label for="emailBody">Message </label>
                          <textarea name="emailBody" id="emailBody" class="form-control" placeholder="Mail Body"></textarea>
                      </div>

                      <div class="form-group">
                          <label for="emailAttachments">Attachment(s) </label>
                          <input type="file" name="emailAttachments[]" multiple="multiple" id="emailAttachments"
                              class="form-control">
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
                  <button type="submit" class="btn btn-primary">envoyer</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
