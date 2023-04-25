@extends('template')

@section('content')
    <div class="signup">
        <div class="signup-connect">
            <h1>Izveido kontu</h1>
            <a href="#" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook</a>
            <a href="#" class="btn btn-social btn-google"><i class="fa fa-google"></i> Sign in with Google</a>
            <a href="">
                <img style="padding: 15px" src="https://eds.vid.gov.lv/Content/images/latvija_lv.png" alt="">
            </a>
            <a href="">
                <img style="padding: 15px" src="https://eds.vid.gov.lv/Content/images/eidas.png" alt="">

            </a>

        </div>
        <div class="signup-classic">
            <h2>Vai izmanto klasisko reģistrācijas medoti</h2>
            <form class="form">
                <fieldset class="username">
                    <input type="text" placeholder="Vārds" />
                </fieldset>
                <fieldset class="username">
                    <input type="text" placeholder="Uzvārds" />
                </fieldset>
                <fieldset class="email">
                    <input type="email" placeholder="E-pasts" />
                </fieldset>
                <fieldset class="password">
                    <input type="password" placeholder="Parole" />
                </fieldset>
                <button type="submit" style="background-color: #3e2093;" class="btn">Reģistrēties</button>
            </form>
            <div style="display: flex; justify-content: space-around; margin: 0;">
                <p>Konts ir izveidots?</p>
                <p>
                    <a href="#" >
                        Ienākt
                    </a>
                </p>
                
            </div>
            
        </div>
    </div>
@endsection
