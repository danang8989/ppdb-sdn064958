<header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
      <div class="me-auto pc-mob-drp">
        <ul class="list-unstyled">
          <!-- ======= Menu collapse Icon ===== -->
          <li class="pc-h-item pc-sidebar-collapse">
            <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- [Mobile Media Block end] -->
      <div class="ms-auto">
        <ul class="list-unstyled">
          <li class="dropdown pc-h-item header-user-profile">
            <a
              class="pc-head-link dropdown-toggle arrow-none me-0"
              data-bs-toggle="dropdown"
              href="#"
              role="button"
              aria-haspopup="false"
              data-bs-auto-close="outside"
              aria-expanded="false"
            >
              <img src="{{ asset('admin/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
              <span>{{ auth()->user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
              <div class="dropdown-header">
                <div class="d-flex mb-1">
                  <div class="flex-shrink-0">
                    <img src="{{ asset('admin/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar wid-35">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">{{ auth()->user()->name }}</h6>
                  </div>
                </div>
              </div>
              <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    id="drp-t1"
                    data-bs-toggle="tab"
                    data-bs-target="#drp-tab-1"
                    type="button"
                    role="tab"
                    aria-controls="drp-tab-1"
                    aria-selected="true"
                    ><i class="ti ti-user"></i> Profile</button
                  >
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="drp-t2"
                    data-bs-toggle="tab"
                    data-bs-target="#drp-tab-2"
                    type="button"
                    role="tab"
                    aria-controls="drp-tab-2"
                    aria-selected="false"
                    ><i class="ti ti-settings"></i> Setting</button
                  >
                </li>
              </ul>
              <div class="tab-content" id="mysrpTabContent">
                <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="dropdown-item">
                    <i class="ti ti-power"></i>
                    <span>Logout</span>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                        @csrf
                      </form>
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </header>