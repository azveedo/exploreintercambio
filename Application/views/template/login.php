<section>
        <div class="img-bg">
          <img src="./public/assets/images/bg-login.jpg">
        </div>
        <div class="content-box">
          <div class="form-content">
            <h1>Entrar</h1>
            <form action="login/entrar" method="post">
              <div class="input-box">
                <label>Seu apelido ou email</label>
                <input type="text" name="usuario" id="usuario" required>
              </div>
              <div class="input-box">
                <label>Senha</label>
                <input type="password" name="senha" id="senha" required>
              </div>
              
              

              <div class="remember">
                <label><input type="checkbox" onclick="mostraSenha()"> Mostrar Senha</label>
              </div>
              <div class="input-box">
                <input type="submit" value="Entrar" name="btnEntrar">
              </div>
              <div class="input-box">
                <p>E aí, não tem uma conta? <a href="cadastro">Registrar-se</a></p>
              </div>
            </form>
          </div>
        </div>
      </section>