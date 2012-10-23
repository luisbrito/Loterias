<div class="loginrequired-index main grid clearfix">
    <div class="box-login">
        <div class="inner pvm prl">
            <div class="module-featured">
                <div class="body">
                    <div class="module module-aside">
                        <div class="head">
                            <h3>Es necesario autenticarse</h3>
                        </div>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('verifylogin'); ?>
                        <fieldset>
                            <div>
                                <label>Usuario</label>
                                <input type="text" value="" id="username" name="username" class="elgg-input-text elgg-autofocus">
                            </div>
                            <div>
                                <label>Contrase&ntilde;a</label>
                                <input type="password" value="" id="passowrd" name="password" class="elgg-input-password">
                            </div>
                            <div class="elgg-foot">
                                <label class="mtm float-alt">
                                    <input type="checkbox" name="persistent" value="true">
                                Recu&eacute;rdame
                                </label>
                                <input type="submit" value="Acceder" class="button button-submit">
                            </div>
                        </fieldset>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>

