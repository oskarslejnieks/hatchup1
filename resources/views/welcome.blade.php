@extends('template')

@section('content')
    <div class="main">
        <div class="imgDiv">
            <img class="topImage"  src="img/bilde.jpeg" alt="" />
            <input type="text" class="imgInput">
            <button class="imgBtn">Meklēt</button>
            <h2 class="imgH2">Atrodi sev piemērotu darbu</h2>
        </div>
    </div>
    
    
    <div class="box" style="">
        <a href="{{ route('remoteWork') }}">
            <div class="card-first">
                <div class="imgBx">
                    <img src="https://images.businessnewsdaily.com/app/uploads/2022/04/04082415/Customer_Service_Getty_nortonrsx.jpg"
                        alt="images">
                </div>
                <div class="details">
                    <h2>Darbs neklātienē</h2>
                </div>
            </div>
        </a>
        <a href="{{ route('workOnSite') }}">
            <div class="card-first">
                <div class="imgBx">
                    <img src="https://www.dpd.com/wp-content/uploads/sites/231/2022/02/Web_Version-DPD_2022_FL02883.jpg" alt="images">
                </div>
                <div class="details">
                    <h2>Darbs klātienē</h2>
                </div>
            </div>
        </a>
        <a href="{{ route('seniors') }}">
            <div class="card-first">
                <div class="imgBx">
                    <img src="https://cf.ltkcdn.net/seniors/images/orig/240785-2121x1414-senior-woman-working-from-home.jpg" alt="images">
                </div>
                <div class="details">
                    <h2>Senioriem</h2>
                </div>
            </div>
        </a>
        <a href="{{ route('students') }}">
            <div class="card-first">
                <div class="imgBx">
                    <img src="https://images.theconversation.com/files/299056/original/file-20191028-113998-52jfp4.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip" alt="images">
                </div>
                <div class="details">
                    <h2>Studentiem</h2>
                </div>
            </div>
        </a>
    </div>
    <h2 style="margin-bottom: 0; text-align: center; font-size: 30px;">Mūsu sadarbības partneri</h2>
    <div class="sponsors">
        <div>
            <img width="100px" height="50px" src="https://logos-world.net/wp-content/uploads/2022/04/Circle-K-Emblem.png" alt="">
        </div>
        <div>
            <img width="100px" height="50px" src="https://www.llu.lv/sites/default/files/images/articles/LLU_logo_rgb_0.jpg" alt="">
            
        </div>
        <div>
            <img width="100px" height="50px" src="https://www.adazi.lv/wp-content/uploads/2018/07/Elvi_logo_bez_saukla-2018.g.jpg" alt="">
        </div>
        <div>
            <img width="100px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Ikea_logo.svg/2560px-Ikea_logo.svg.png" alt="">
        </div>
        <div>
            <img width="100px" height="50px" src="https://seeklogo.com/images/L/Lido-logo-6C8BB3F47A-seeklogo.com.png" alt="">
        </div>
        <div>
            <img width="100px" height="50px" src="https://www.picudarbnica.lv/wp-content/themes/jsh/img/fp-logo.png" alt="">
        </div>
    </div>
@endsection
