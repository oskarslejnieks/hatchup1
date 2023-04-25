<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="topnav-left">
            <a href="{{ route('index') }}">
                <img width="100px" height="50px" src="img/mmos_logo.png"/>
            </a>
            
        </div>
            <ul class="nav navbar-nav">
                <li style="cursor: pointer; background: #3e2093; padding: 15px; border-radius: 15px; margin: 0px 15px; color: white;">
                    <a href="{{ route('index') }}">Darba meklētājiem</a>
                </li>
                <li style="cursor: pointer; background: #3e2093; padding: 15px; border-radius: 15px; margin: 0px 15px; color: white;">
                    <a href="{{ route('employers') }}">Darba devējiem</a>
                </li>
                <li style="cursor: pointer; background: rgb(233, 239, 249); padding: 15px 25px; border-radius: 15px; margin: 0px 15px; border: 2px solid black;" class="margin-right ">
                    <a href="{{ route('login') }}">Ienākt</a>
                </li>
            </ul>
    </div>
</nav>