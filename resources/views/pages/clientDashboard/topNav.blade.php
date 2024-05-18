<div class="row db-menu py-4">
    <div class="col-md-3">
        <img class="img-fluid" src="Assets/images/forex235_logo.svg" alt="Forex 235">
    </div>
    <div class="col-md-9 text-white d-flex justify-content-end">
        <ul>
            <!--notification-->
            <li class="dropstart">
                <i class="fa-regular fa-bell dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></i>
                <div class="dropdown-menu">
                    <span>
                        <a href="#" class="dropdown-item">
                            New Trading Account Created <br>
                            <em>5 minutes ago</em>
                        </a>
                    </span>
                    <span>
                        <a href="#" class="dropdown-item">
                            Payment Method added successfully..! <br>
                            <em>1 hour ago</em>
                        </a>
                    </span>
                </div>
            </li>
            <!--external menu-->
            <li class="dropstart">
                <i class="fa-regular fa-grid dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu">
                    <span>
                        <a href="{{route('dashboard')}}" class="dropdown-item">
                            <i class="fa-regular fa-grid-2-plus"></i>
                            Client Dashboard
                        </a>
                    </span>
                    <span>
                        <a href="https://forex235.com/" class="dropdown-item" target="_blank">
                            <i class="fa-light fa-globe"></i>
                            Our website
                        </a>
                    </span>

                    <span>
                        <a href="https://ib.forex235.com/" class="dropdown-item" target="_blank">
                            <i class="fa-regular fa-handshake"></i>
                            Partner Program
                        </a>
                    </span>
                </ul>
            </li>
            <li class="dropstart">
                <i class="fa-regular fa-circle-user dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"></i>
                <ul class="dropdown-menu">
                    <span class="dropdown-item">
                        <i class="fa-regular fa-circle-user"></i>
                        Username <br>
                        user@email.com
                    </span>
                    <span>
                        <a href="{{route('settings')}}" class="dropdown-item">
                            <i class="fa-regular fa-gear"></i>
                            Settings
                        </a>
                    </span>
                    <span>
                        <a href="#" class="dropdown-item">
                            <i class="fa-regular fa-right-from-bracket"></i>
                            Logout
                        </a>
                    </span>
                </ul>
            </li>

            <li class="dropstart">
                <i class="fa-regular fa-wallet dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></i>
                <span> 0.00 USD </span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>
