<div class="container">
    <br>
    <div class="row" style="text-align:center">
        <div class="d-flex">
            <div class="col">
                @if ($checked == 1)
                    <h3 class="cartHeader"><b>Košík</b></h3>
                @else
                    <h3 class="cartHeader">Košík</h3>
                @endif
            </div>
            <div class="col">
                @if ($checked == 2)
                    <h3 class="cartHeader"><b>Doprava</b></h3>
                @else
                    <h3 class="cartHeader">Doprava</h3>
                @endif
            </div>
            <div class="col">
                @if ($checked == 3)
                    <h3 class="cartHeader"><b>Dodacie údaje</b></h3>
                @else
                    <h3 class="cartHeader">Dodacie údaje</h3>
                @endif
            </div>
            <div class="col">
                @if ($checked == 4)
                    <h3 class="cartHeader"><b>Platba</b></h3>
                @else
                    <h3 class="cartHeader">Platba</h3>
                @endif
            </div>
            <div class="col">
                @if ($checked == 5)
                    <h3 class="cartHeader"><b>Zhrnutie</b></h3>
                @else
                    <h3 class="cartHeader">Zhrnutie</h3>
                @endif
        </div>
    </div>
</div>
<div class="container-fluid"><hr></div>