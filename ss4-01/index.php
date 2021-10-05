<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title>Přihlášení do Seznamu</title>
        <meta name="description" content="Přihlášením do jednoho účtu můžete používat vše od Seznamu. Email, Mapy, Sreality, Stream, firemní profil Seznam naplno a mnohem víc." />
        <link rel="shortcut icon" href="/static/img/favicon.ico" />
        <link rel="apple-touch-icon" href="/static/img/apple-touch-icon.png" />
        <script src="//h.imedia.cz/js/dot-small.js" crossorigin></script>
        <script>
            var conf = {
                page: "login",
                path: null,
                query: {"username": ["@seznam.cz"]},
                tld_suffix: "cz",
                lang: "cs",
                ab: "a",
                neznam: {
                    client_id: "WE93AqdCT99Ap7X6enid788LCYh4vqNhiQyqRAde",
                    redirect_uri: "https://login.szn.cz/api/v1/oauth/result"
                },
                
                
                logged: false,
                fb_id: "405679613144624",
                neznam_domains: ["firma.seznam.cz", "sz.cz"]
            };
            
                conf.return_url = "https://email.seznam.cz/?hp=";
            
            
                conf.service = "email";
                conf.allow_social = false;
            
            
            
            
            

            if (window.DOT) {
                var service = (conf.page == "login" ? "loginszn" : "reg");
                DOT.cfg({service:service, error:true, rusId:conf.uid || ""});

                (function() {
                    var old = DOT._send;
                    DOT._send = function(data) {
                        var img = old.call(DOT, data);
                        if (data.a != "error") { return img; }
                        document.createElement("img").src = img.src.replace("h.imedia.", "jslog.post.");
                        return img;
                    }
                })();
            }

            var IE8 = !Function.prototype.bind;
        </script>
        <!--[if IE 8 ]><script>IE8 = true;</script><![endif]-->

        
        

        

        

        

        

        <script>
        if (IE8) {
            document.createElement("header");
            document.createElement("footer");
            document.createElement("section");
            document.createElement("nav");
            document.write('<link rel="stylesheet" href="/static/css/app.ie8.css?1632308064" />');
        } else {
            document.write('<link rel="stylesheet" href="/static/css/app.css?1632308064" />');
        }
        </script>
    </head>

    <body>
        <div class="wrapper">
        <header>
            <a href="https://www.seznam.cz/">
                <img id="logo" src="/static/img/seznam.svg" alt="Logo" />
            </a>
            <h1></h1>
            <h2></h2>
            <a class="to-homepage" href="https://www.seznam.cz/">‹ Seznam.cz</a>
            <div id="language">
                <span tabindex="0"><span data-locale="language"></span> <img src="/static/img/language/cs.svg"/></span>
                <ul class="hidden">
                    <li data-language="cs"><img src="/static/img/language/cs.svg"/> Česky</li>
                    <li data-language="sk"><img src="/static/img/language/sk.svg"/> Slovensky</li>
                    <li data-language="en"><img src="/static/img/language/en.svg"/> English</li>
                    <li data-language="de"><img src="/static/img/language/de.svg"/> Deutsch</li>
                </ul>
            </div>
        </header>

        <section id="login" class="hidden">
            <div class="paper">
                <form class="login hidden">
                    <h1 data-locale="login.title"></h1>
                    <h2 data-locale="login.subtitle"></h2>

                    <input type="text" id="login-username" autocorrect="off" autocapitalize="off" data-placeholder="login.username" /><!-- zde neni zadny whitespace --><select name="domain">
                        
                        <option value="@seznam.cz" selected="selected" >@seznam.cz</option>
                        
                        <option value="@email.cz"  >@email.cz</option>
                        
                        <option value="@post.cz"  >@post.cz</option>
                        
                        <option value="@spoluzaci.cz"  >@spoluzaci.cz</option>
                        
                        <option value="@stream.cz"  >@stream.cz</option>
                        
                        <option value="@firmy.cz"  >@firmy.cz</option>
                        
                        <option value="" data-locale="login.own" ></option>
                    </select>

                    <input type="password" id="login-password" data-placeholder="login.password" />

                    <a id="login-recover" href="#" data-locale="login.help"></a>

                    <button type="submit" data-locale="login.submit"></button>

                    <div class="fb-login hidden">
                        <span data-locale="login.or"></span>
                        <button type="submit" class="fb-login" data-locale="login.fb_login"><img src="/static/img/logo-fb-submit.svg" /></button>
                    </div>

                    <footer>
                        <span data-locale="login.register.text"></span>
                        <a href="https://registrace.seznam.cz/?service=email&amp;return_url=https%3A//email.seznam.cz/%3Fhp%3D&amp;lang=cs" data-locale="login.register.link"></a>.<br/><br/>
                        <span data-locale="login.tfa.text"></span>
                        <a href="https://www.seznam.cz/zabezpeceni" data-locale="login.tfa.link"></a>.
                    </footer>
                </form>

                <form class="logged hidden"></form>
<!--
                    <div class="vcard-placeholder"></div>
                    <h3 data-locale="login.logged.question"></h3>
                    <p>
                        <span data-locale="login.logged.description1"></span><br/>
                        <strong></strong><br/>
                        <span data-locale="login.logged.description2"></span>
                    </p>
                    <button type="submit" data-locale="login.logged.continue"></button>

                    <a class="relogin" href="/logout?hid=EAUVKFHFKUXYUI41&amp;service=email&amp;return_url=https%3A//email.seznam.cz/%3Fhp%3D" data-locale="login.logged.relogin"></a>
-->
                <div id="ad"><div></div></div>
            </div>
        </section>

        <section id="social-pair" class="hidden">
            <div class="paper">
                <div class="vcard-placeholder"></div>
                <form class="pair hidden">
                    <h1 data-locale="social.pair.title"></h1>
                    <h2 data-locale="social.pair.subtitle"></h2>

                    <h3 data-locale="social.pair.password"></h3>
                    <input type="password" name="password" data-placeholder="login.password" />

                    <a class="login-recover" href="#" data-locale="login.help"></a>

                    <button type="submit" data-locale="social.pair.submit"></button>
                </form>

                <form class="register hidden">
                    <h1 data-locale="social.register.title"></h1>
                    <h2 data-locale="social.register.subtitle"></h2>

                    <div class="year">
                        <input type="text" class="register-year" maxlength="4" data-placeholder="register.year"
                            
                        />
                    </div>

                    <fieldset class="radioset">
                        <label>
                            <input type="radio" name="register.sex" value="m"
                            
                            />
                            <span data-locale="register.male"></span>
                        </label>
                        <label>
                            <input type="radio" name="register.sex" value="f"
                            
                            />
                            <span data-locale="register.female"></span>
                        </label>
                        <label>
                            <input type="radio" name="register.sex" value="o"
                            
                            />
                            <span data-locale="register.other"></span>
                        </label>
                        
                    </fieldset>

                    <label>
                        <span data-locale="register.agree"></span>
                        <a class="licence-link" target="_blank" data-locale="register.licence"></a>
                    </label>

                    <button type="submit" data-locale="social.register.submit"></button>
                </form>
            </div>
        </section>

        <section id="licence" class="hidden">
            <div class="paper">
                <form>
                    <h1 data-locale="licence.title"></h1>
                    <h2 data-locale="licence.subtitle"></h2>

                    <div class="placeholder"></div>
                    <img src="/static/img/pes.png" />
                    <button type="submit" data-locale="licence.accept" data-purpose="accept"></button>
<!--                    <a href="#" data-locale="licence.continue" data-purpose="continue"></a> -->
                </form>
            </div>
        </section>

        <section id="avatar" class="hidden">
            <div class="paper">
                <form>
                    <h1 data-locale="avatar.title"></h1>
                    <h2 data-locale="avatar.subtitle"></h2>
                    <h3 data-locale="avatar.purpose"></h3>

                    <div class="placeholder"></div>
                    <div class="center">
                        <span class="email"></span>
                        &rarr;
                        <img />
                    </div>
                    <button type="submit" data-locale="avatar.accept" data-purpose="accept"></button>
                    <a href="#" data-locale="avatar.deny" data-purpose="deny"></a>
                </form>
            </div>
        </section>

        <section id="register" class="hidden">
            <div class="paper">
                <form class="main">
                    <h1 data-locale="register.title"></h1>
                    <h2 data-locale="register.subtitle"></h2>

                    <input type="text" id="register-username" data-placeholder="register.username"
                       

                    /><!-- zde neni zadny whitespace --><select name="domain">
                        
                        <option value="" hidden></option>
                    </select>

                    <p class="mode-switch">
                        <span></span>
                        <a href="#"></a>
                    </p>

                    <input type="password" data-placeholder="register.password1" />

                    <input type="password" data-placeholder="register.password2" />

                    <div class="year">
                        <input type="text" id="register-year" maxlength="4" data-placeholder="register.year"
                           
                        />
                    </div>

                    <fieldset class="radioset">
                        <label>
                            <input type="radio" name="register.sex" value="m"
                            
                            />
                            <span data-locale="register.male"></span>
                        </label>
                        <label>
                            <input type="radio" name="register.sex" value="f"
                            
                            />
                            <span data-locale="register.female"></span>
                        </label>
                        <label>
                            <input type="radio" name="register.sex" value="o"
                            
                            />
                            <span data-locale="register.other"></span>
                        </label>
                        
                    </fieldset>

                    <label>
                        <span data-locale="register.agree"></span>
			<a class="licence-link" target="_blank">
				<span data-locale="register.licence"></span>.
			</a>
                    </label>

                    <button type="submit" data-locale="register.submit"></button>

                    <footer>
                        <span data-locale="register.login.text"></span>
                        <a href="https://login.szn.cz/?service=email&amp;return_url=https%3A//email.seznam.cz/%3Fhp%3D&amp;lang=cs" data-locale="register.login.link"></a>.
                    </footer>
                </form>

                <form class="sent">
                    <h1 data-locale="register.sent.title"></h1>

                    <p data-locale="register.sent.subtitle"></p>
                    <p>
                        <span data-locale="register.sent.missing"></span>
                        <a href="#" data-locale="register.sent.resend"></a>.
                    </p>
                </form>
            </div>
        </section>

        <section id="register-done" class="hidden">
            <div class="paper">
                <h1 data-locale="register.done.title"></h1>
                <h2 data-locale="register.subtitle"></h2>

                <p></p>
                <a class="button"></a>
            </div>
        </section>

        <section id="secure" class="hidden">
            <div class="paper">
                <h1 data-locale="secure.title"></h1>
                <h2 class="register" data-locale="secure.subtitleRegister"></h2>
                <div class="vcard-placeholder"></div>
                <h3 class="login" data-locale="secure.subtitleLogin"></h3>

                <ul>
                    <li data-locale="secure.nav.phone"></li>
                    <li data-locale="secure.nav.email"></li>
                    <li data-locale="secure.nav.done"></li>
                </ul>

                <div class="placeholder-phone">
                    <a href="#" data-locale="secure.phone.skip"></a>
                </div>

                <div class="placeholder-email">
                    <a href="#"></a>
                </div>

                <section class="done">
                    <div class="good">
                        <p data-locale="secure.done.good"></p>
                        <div class="placeholder"></div>
                    </div>
                    <div class="bad">
                        <p><strong data-locale="secure.done.bad"></strong></p>
                        <div class="placeholder"></div>
                        <p>
                            <a href="https://www.seznam.cz/zabezpeceni" target="_blank" data-locale="secure.tfa"></a>
                        </p>
                        <p>
                            <label><input type="checkbox" /> <span data-locale="secure.done.confirm"></span></label>
                        </p>
                    </div>
                    <button type="submit" class="continue"></button>
                </section>
            </div>
        </section>

        <section id="veto" class="hidden">
            <div class="paper">
                <h1 data-locale="veto.title"></h1>
                <h2>&nbsp;</h2>

                <p>
                    <span data-locale="veto.description1"></span>
                    <strong></strong>
                    <span data-locale="veto.description2"></span>
                    <strong style="white-space:nowrap"></strong>
                    <span data-locale="veto.description3"></span>.
                </p>
                <form>
                    <input name="ticket" value="" type="hidden" />

                    <input type="password" name="old_password" data-placeholder="veto.password.old" />

                    <input type="password" name="new_password" data-placeholder="veto.password.new1" />

                    <input type="password" name="repeated_password" data-placeholder="veto.password.new2" />

                    <button type="submit" data-locale="veto.submit"></button>
                </form>
            </div>
        </section>

        <section id="veto-pin" class="hidden">
            <div class="paper">
                <h1 data-locale="veto-pin.title"></h1>
                <h2>&nbsp;</h2>

                <form>
                    <input name="ticket" value="" type="hidden" />

                    <input type="text" name="email" data-placeholder="veto-pin.email" />
                    <input type="text" name="pin" data-placeholder="veto-pin.pin" value=""/>

                    <button type="submit" data-locale="veto-pin.submit"></button>
                </form>
            </div>
        </section>

        <section id="veto-done" class="hidden">
            <div class="paper">
                <h1 data-locale="veto.done.title"></h1>
                <h2>&nbsp;</h2>

                <p data-locale="veto.done.description"></p>
                <a data-locale="veto.done.link" class="button" href="https://profil.seznam.cz/secure"></a>
            </div>
        </section>

        <section id="tfa" class="hidden">
            <div class="paper">
                <h1 data-locale="tfa.title"></h1>
                <h2 data-locale="tfa.subtitle"></h2>

                <div class="vcard-placeholder"></div>
                <div class="tfa-placeholder"></div>

                <section class="remember">
                    <h3 data-locale="tfa.remember.title"></h3>
                    <p data-locale="tfa.remember.description"></p>
                    <a href="#" class="button" data-action="remember" data-locale="tfa.remember.yes"></a>
                    <a href="#" data-action="continue" data-locale="tfa.remember.no"></a>
                </section>
            </div>
        </section>

        <section id="oauth" class="hidden">
            <div class="paper">
                <div class="vcard-placeholder"></div>

                <p></p>
                <ul></ul>
                <p></p>

                <form>
                    <button type="submit" data-locale="oauth.submit"></button>
                </form>
            </div>
        </section>

        <section id="refresh-secure" class="hidden">
            <div class="paper">
                <h1 data-locale="refresh-secure.title">&nbsp;</h1>
                <h2>&nbsp;</h2>

                <p data-locale="secure.refresh.is_fresh"></p>
                <a href="/continue" class="button" data-locale="secure.refresh.continue"></a>
            </div>
        </section>

        <section id="recover" class="hidden">
            <div class="paper">
                <h1 data-locale="recover.title"></h1>
                <h2 data-locale="recover.subtitle"></h2>

                <form id="recover-intro" action="#recover-intro">
                    <p data-locale="recover.description"></p>

                    <label data-locale="recover.youremail" for="recover-username"></label>
                    <input type="text" id="recover-username" name="youremail" /><!-- zde neni zadny whitespace --><select name="domain">
                    
                    <option value="@seznam.cz" selected="selected" >@seznam.cz</option>
                    
                    <option value="@email.cz"  >@email.cz</option>
                    
                    <option value="@post.cz"  >@post.cz</option>
                    
                    <option value="@spoluzaci.cz"  >@spoluzaci.cz</option>
                    
                    <option value="@stream.cz"  >@stream.cz</option>
                    
                    <option value="@firmy.cz"  >@firmy.cz</option>
                    
                    <option value="" data-locale="login.own" ></option>
                    </select>

                    <button type="submit" data-locale="recover.continue"></button>
                </form>

                <div class="info">
                    <div class="vcard-placeholder"></div>

                    <p class="logout"><a href="/recover/intro" data-locale="recover.logout"></a></p>

                    <ul>
                        <li data-locale="recover.step.1"></li>
                        <li data-locale="recover.step.2" class="current"></li>
                        <li data-locale="recover.step.3"></li>
                        <li data-locale="recover.step.4"></li>
                    </ul>
                </div>

                <form id="recover-question">
                    <h3 data-locale="recover.question.title"></h3>
                    <p data-locale="recover.question.description"></p>

                    <p>
                        <span data-locale="recover.question.question"></span>:<br/>
                        <strong></strong>
                    </p>

                    <input name="answer" data-placeholder="recover.question.answer" type="text" />

                    <input name="birth-year" type="text" maxlength="4" data-placeholder="recover.question.year" />
                    <label data-locale="recover.question.no-year"><input type="checkbox" /><span></span></label>

                    <input name="delivery-email" type="text" data-placeholder="recover.question.email" />

                    <button type="submit" data-locale="recover.continue"></button>
                </form>

                <form id="recover-additional">
                    <h3 data-locale="recover.additional.title"></h3>
                    <p data-locale="recover.additional.description"></p>

                    <fieldset id="recover-addemail">
                        <p data-locale="recover.additional.email"></p>
                        <input type="text" />
                        <a href="#" data-locale="recover.additional.addemail"></a>
                    </fieldset>

                    <fieldset id="recover-addfolder">
                        <p data-locale="recover.additional.folder"></p>
                        <input type="text" />
                        <a href="#" data-locale="recover.additional.addfolder"></a>
                    </fieldset>

                    <label data-locale="recover.additional.skin"></label>

                    <div class="new-skin">
                    <h3 data-locale="recover.additional.light"></h3>
                    <img src="/static/img/skin/new/01.jpg" data-id="0" />
                    <img src="/static/img/skin/new/03.jpg" data-id="2" />
                    <img src="/static/img/skin/new/04.jpg" data-id="3" />
                    <img src="/static/img/skin/new/05.jpg" data-id="9" />
                    <img src="/static/img/skin/new/06.jpg" data-id="4" />
                    <img src="/static/img/skin/new/07.jpg" data-id="5" />
                    <img src="/static/img/skin/new/08.jpg" data-id="6" />
                    <img src="/static/img/skin/new/09.jpg" data-id="8" />

                    <h3 data-locale="recover.additional.color"></h3>
                    <img src="/static/img/skin/new/20.svg" data-id="20" />
                    <img src="/static/img/skin/new/21.svg" data-id="21" />
                    <img src="/static/img/skin/new/22.svg" data-id="22" />
                    <img src="/static/img/skin/new/23.svg" data-id="23" />
                    <img src="/static/img/skin/new/24.svg" data-id="24" />

                    <h3 data-locale="recover.additional.dark"></h3>
                    <img src="/static/img/skin/new/02.jpg" data-id="50" />
                    <img src="/static/img/skin/new/06.jpg" data-id="54" />
                    <img src="/static/img/skin/new/07.jpg" data-id="55" />
                    <img src="/static/img/skin/new/08.jpg" data-id="56" />
                    <img src="/static/img/skin/new/09.jpg" data-id="58" />
                    </div>

                    <button type="submit" data-locale="recover.verify"></button>
                </form>

                <form id="recover-email">
                    <h3>
                        <span data-locale="recover.email.title"></span>
                        <a href="/recover/phone" data-locale="recover.email.alternative" style="display:none"></a>
                    </h3>
                    <p>
                        <span data-locale="recover.email.description"></span>
                        <strong></strong>
                    </p>
                    <button type="submit" data-locale="recover.continue"></button>
                </form>

                <form id="recover-phone" action="#recover-phone">
                    <h3>
                        <span data-locale="recover.phone.title"></span>
                        <a href="/recover/email" data-locale="recover.phone.alternative" style="display:none"></a>
                    </h3>
                    <p data-locale="recover.phone.description"></p>

                    <p><a href="/recover/sms-pin" class="skip" data-locale="recover.phone.skip"></a></p>

                    <p class="phone-number">
                        <label data-locale="recover.phone.phone"></label>:
                        <span class="phone-number">+420&ensp;775&ensp;225</span>
                        <input name="phone" maxlength="3" type="text" />
                    </p>

                    <button type="submit" data-locale="recover.continue"></button>
                </form>

                <form id="recover-sms-pin">
                    <h3 data-locale="recover.pin.sms.title"></h3>
                    <p data-locale="recover.pin.sms.description"></p>

                    <input name="pin" data-placeholder="recover.pin.pin" type="text" maxlength="4" />

                    <button type="submit" data-locale="recover.verify"></button>
                </form>

                <form id="recover-password">
                    <h3 data-locale="recover.password.title"></h3>
                    <p data-locale="recover.password.description"></p>

                    <input type="password" data-placeholder="register.password1" />
                    <input type="password" data-placeholder="register.password2" />

                    <label class="hidden">
                        <input type="checkbox" name="save_email" />
                        <span></span>
                    </label>

                    <button type="submit" data-locale="recover.password.submit"></button>
                </form>

                <form id="recover-bad-ticket">
                    <h3 data-locale="recover.ticket.error_title"></h3>
                    <p data-locale="recover.ticket.bad_or_old"></p>
                </form>

                <form id="recover-req-sent">
                    <h3 data-locale="recover.req_sent.title"></h3>
                    <p data-locale="recover.req_sent.description"></p>
                </form>

                <form id="recover-mail-sent">
                    <h3 data-locale="recover.mail_sent.title"></h3>
                    <p data-locale="recover.mail_sent.description"></p>
                </form>

                <form id="recover-done" action="/">
                    <h3 data-locale="recover.done.title"></h3>
                    <p data-locale="recover.done.description"></p>
                    <button type="submit" data-locale="recover.done.submit"></button>
                </form>

                <form id="recover-keys">
                    <h2 data-locale="recover.keys.title"></h2>
                    <p data-locale="recover.keys.description1"></p>
                    <p class="strong" data-locale="recover.keys.description2"></p>
                    <label>
                        <span data-locale="recover.keys.email"></span>
                        <input type="text" name="delivery-email" />
                    </label>
                    <label>
                        <span data-locale="recover.keys.textarea"></span>
                        <textarea name="keys-sample"></textarea>
                    </label>
                    <p class="output"></p>
                    <button type="submit" data-locale="recover.verify"></button>
                </form>
                <footer>
                    <a class="login" href="https://login.szn.cz" data-locale="header.login"></a>
                </footer>
            </div>
        </section>

        <section id="recover-mailcz" class="hidden">
            <img src="/static/img/logo-email.svg" height="48" />
            <h1>Migrace ze služby Mail.cz</h1>
            <form>

                <input type="password" placeholder="Vytvořte nové heslo" />
                <input type="password" placeholder="Zopakujte nové heslo" />

                <label>
                    <input type="checkbox" />
                    <span>Souhlasím s <a href="https://napoveda.seznam.cz/cz/smluvni-podminky/podminky-registrace/">podmínkami užití</a></span>
                </label>

                <button type="submit">Pokračovat dále</button>

            </form>
            <div class="done">
                <h2>Vše je nastaveno a nyní se můžete přihlásit do účtu!</h2>

                <img src="/static/img/mailcz-done.svg" />

                <a class="button" href="/?service=email&return_url=https://email.seznam.cz">Pokračovat na přihlášení</a>
            </div>
        </section>

        <section id="blocked-gdpr" class="hidden">
			<h1 data-locale="blockedGdpr.title"></h1>
			<h2 data-locale="blockedGdpr.subtitle"></h2>
			<div class="blockedGdprBox">
				<div class="vCard-placeholder"></div>
				<div class="info">
					<h3 data-locale="blockedGdpr.infoTitle"></h3>
					<p data-locale="blockedGdpr.infoText"></p>
				</div>
				<div class="line pwdLine">
					<input type="password" data-placeholder="blockedGdpr.password" name="pwd">
				</div>
				<div class="line notifyActivate">
					<label>
						<input type="checkbox" name="notify">
						<span data-locale="blockedGdpr.notify"></span>
					</label>
				</div>
				<div class="line subButton">
					<button type="submit" data-locale="blockedGdpr.continue"></button>
				</div>
				<div class="line">
					<a class="relogin" href="/logout?hid=EAUVKFHFKUXYUI41&amp;service=email&amp;return_url=https%3A//email.seznam.cz/%3Fhp%3D" data-locale="login.logged.relogin"></a>
				</div>
			</div>
		</section>

        <section id="help" class="hidden">
            <div class="paper">
                <h1></h1>
                <h2></h2>
                <form>
                    <p>
                        <label>
                            URL:
                            <select>
                                <option>[pick one below]</option>
                            </select>
                        </label>
                    </p>
                    <p class="inputs"></p>
                    <p><button type="submit">Help!</button></p>
                </form>
                <pre></pre>

                <section class="widget-captcha">
                    <label data-locale="register.captcha.title"></label>
                    <a href="#" class="play" data-locale="register.captcha.play"></a>
                    <a href="#" class="new" data-locale="register.captcha.new"></a>
                    <img />
                    <input type="text" />
                </section>

                <form class="widget-secure-phone">
                    <section data-state="inactive">
                        <p><a href="#" data-locale="secure.phone.activate"></a></p>
                    </section>
                    <section data-state="phone">
                        <p data-locale="secure.phone.description"></p>
                        <input type="text" data-placeholder="secure.phone.label" />
                        <button data-locale="secure.verify" type="submit"></button>
                    </section>
                    <section data-state="pin">
                        <p>
                            <span data-locale="secure.pin.description1"></span>
                            <strong class="repeat"></strong><span class="description2"></span>
                        </p>
                        <p class="center"><a href="#" data-locale="secure.phone.other" class="other"></a></p>
                        <input type="text" class="pin" maxlength="4" data-placeholder="secure.phone.pin" />
                        <p class="center"><a href="#" data-locale="secure.phone.resend" class="resend"></a></p>
                        <input type="password" class="password" data-placeholder="secure.phone.password" />
                        <button data-locale="secure.verify" type="submit"></button>
                    </section>
                    <section data-state="done">
                        <p></p>
                        <p><a href="#" data-locale="secure.phone.edit" class="edit"></a></p>
                    </section>
                </form>

                <form class="widget-secure-email">
                    <section data-state="inactive">
                        <p><a href="#" data-locale="secure.email.activate"></a></p>
                    </section>
                    <section data-state="email">
                        <p data-locale="secure.email.description"></p>
                        <input type="text" data-placeholder="secure.email.label" />
                        <button data-locale="secure.verify" type="submit"></button>
                    </section>
                    <section data-state="sent">
                        <p></p>
                        <p class="center"><a href="#" data-locale="secure.email.other" class="other"></a></p>
                        <p class="center"><a href="#" data-locale="secure.email.resend" class="resend"></a></p>
                    </section>
                    <section data-state="done">
                        <p></p>
                        <p><a href="#" data-locale="secure.email.edit" class="edit"></a></p>
                    </section>
                </form>

                <form class="widget-password-change">
                    <h3></h3>
                    <p></p>
                    <input id="password-current" type="password" />

                    <input type="password" />

                    <input type="password" />

                    <span class="placeholder"></span>

                    <button type="submit"></button>

                    <a class="continue" href="/continue" data-locale="password.continue"></a>
                </form>

                <div class="widget-vcard">
                    <img alt="Seznam avatar" class="avatar" />
                    <p class="name"></p>
                    <p class="email"></p>
                </div>

                <div class="widget-tfa">
                    <section class="waiting">
                        <h3 data-locale="tfa.waiting.title"></h3>
                        <div>
                            <div class="wave"><b></b><b></b><b></b></div>
                            <div class="video"></div>
                            <p data-locale="tfa.waiting.description"></p>
                        </div>
                        <a href="#" data-action="help" data-locale="tfa.waiting.help"></a>
                    </section>

                    <section class="pin">
                        <h3 data-locale="tfa.pin.title"></h3>
                        <form data-action="pin">
                            <div>
                                <input name="pin" size="8" />
                                <p data-locale="tfa.pin.description"></p>
                                <button type="submit" data-locale="tfa.pin.submit"></button>
                            </div>
                            <a href="#" data-action="help" data-locale="tfa.waiting.help"></a>
                        </form>
                    </section>

                    <ul class="help">
                        <li><a href="#" data-action="push" >
                            <img src="/static/img/tfa/push.svg" />
                            <span data-locale="tfa.help.push1"></span>
                            <span data-locale="tfa.help.push2"></span>
                        </a></li><li><a href="#" data-action="sms">
                            <img src="/static/img/tfa/sms.svg" />
                            <span data-locale="tfa.help.sms1"></span>
                            <span data-locale="tfa.help.sms2"></span>
                        </a></li><li><a href="https://napoveda.seznam.cz/dvoufaktorove-overeni/" target="_blank">
                            <img src="/static/img/tfa/help.svg" />
                            <span data-locale="tfa.help.help1"></span>
                            <span data-locale="tfa.help.help2"></span>
                        </a></li>
                    </ul>
                </div>
            </div>
        </section>

        </div>

        <footer>
            <p>Copyright &copy; 1996&ndash;<span id="year">2018</span> Seznam.cz, a.s.</p>
            <p>
                <a target="_blank" href="//napoveda.seznam.cz/cz/login/prihlaseni/" data-locale="footer.help"></a>
                –
                <a target="_blank" href="http://reklama.seznam.cz/" data-locale="footer.ad"></a>
            </p>
        </footer>

        <script>
        var script = function(path) {
            var url = "/static/js/" + path;
            document.write('<script src="' + url + '?1632308064"></scr' + 'ipt>');
        }
        script("locale/cs.js");

        if (IE8) {
            script("polyfills.ie8.js");
            script("app.ie8.js");
        } else {
            script("polyfills.js");
            script("app.js");
        }
        </script>

        


        <script>
            if (conf.page == "login") {
                var pp_gemius_identifier = "bPzlpouDpSBu7FNHsjGgIMbi7KRw0iy5279DT9.NN.r.17";
                var pp_gemius_extraparameters = ["gA=seznam.cz/login.seznam.cz/login_default"];
            } else {
                var pp_gemius_identifier = "AurgJC7_f2KS7I_pGo8ZxJevP1ig5fr9qCoyPezrDrT.s7";
                var pp_gemius_extraparameters = ["gA=seznam.cz/RUS/registrace.seznam.cz"];
            }

            function gemius_pending(i) { window[i] = window[i] || function() {var x =
            window[i+'_pdata'] = window[i+'_pdata'] || []; x[x.length]=arguments;};};
            gemius_pending('gemius_hit'); gemius_pending('gemius_event');
            gemius_pending('pp_gemius_hit'); gemius_pending('pp_gemius_event');
            (function(d,t) {try {var
            gt=d.createElement(t),s=d.getElementsByTagName(t)[0];
            gt.setAttribute('async','async');
            gt.setAttribute('defer','defer');
            gt.src=location.protocol + '//gacz.hit.gemius.pl/xgemius.js';
            s.parentNode.insertBefore(gt,s);} catch (e) {}})(document,'script');
        </script>

        <div style="display:none"><!--preload-->
            <img src="../static/img/check.svg" />
            <img src="../static/img/uncheck.svg" />
            <img src="../static/img/logo-box-fb.svg" />
        </div>

        <script src="//ssp.imedia.cz/static/js/ssp.js" crossorigin></script>
        
    </body>
</html>