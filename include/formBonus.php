<form method="$_GET">
                <div class="row">
                    <div class="col-7 border m-2">
                        <div class="form-group">
                            <label for="firstname">Prénom:</label>
                            <input type="text" class="form-control" id="firstname"  name="firstname"placeholder="Prénom">
                        </div>
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" id="age" name="age" min="18" max="70" placeholder="Age">
                        </div>
                        <div class="form-group">
                            <label for="taille">Taille:</label>
                            <input type="number" id="taille" name="taille" min="1.70" max="2.00" placeholder="Taille" step="0.01">
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="role" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Apprenant</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="role" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Formateur</label>
                        </div>

                        
                    </div>
                    <div class="col border m-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="html" name="html">
                            <label class="form-check-label" for="html">
                            Html
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CSS" name="CSS">
                            <label class="form-check-label" for="CSS">
                            CSS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="bootstrap" name="bootstrap">
                            <label class="form-check-label" for="bootstrap">
                            bootstrap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="mysql" name="mysql">
                            <label class="form-check-label" for="mysql">
                            mysql
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="JS" name="JS">
                            <label class="form-check-label" for="JS">
                            JS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="symfony" name="symfony">
                            <label class="form-check-label" for="symfony">
                            symfony
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col border m-2">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" placeholder="Image">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submitBonus">Submit</button>
            </form>