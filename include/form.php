<form method="GET" >
    <div class="form-row">
        <div class="col-8">
        <input type="text" name="firstname" class="form-control" placeholder="First name">
  
        <input type="text" name="lastname" class="form-control" placeholder="Last name">

        <input type="text" name="age" class="form-control" placeholder="Age">
  
        <input type="number"  step="0.01" name="size" class="form-control" placeholder="Taille">

        

        <div class="form-check">
        <input class="form-check-input" type="radio" name="fonction" checked>
        <label class="form-check-label" for="exampleRadios1">
            Formateur
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="radio" name="fonction">
        <label class="form-check-label" for="exampleRadios2">
            Stagiare
        </label>
        </div>

        <button type="submit" name="submit"  class="btn btn-primary">Submit</button>

    </div>
</form>
