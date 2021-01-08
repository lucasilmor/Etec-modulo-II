package psv;

public class UserBean {

    private String nome;
    private String usuario;
    private String Senha;
    private int acesso;

    public UserBean() {
    }

    public UserBean(String nome, String usuario, String Senha, int acesso) {
        this.nome = nome;
        this.usuario = usuario;
        this.Senha = Senha;
        this.acesso = acesso;
    }

    UserBean(String usuario, String senha, int acesso) {
    }

    public String getSenha() {
        return Senha;
    }

    public void setSenha(String Senha) {
        this.Senha = Senha;
    }

    public int getAcesso() {
        return acesso;
    }

    public void setAcesso(int acesso) {
        this.acesso = acesso;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getUsuario() {
        return usuario;
    }

    public void setUsuario(String usuario) {
        this.usuario = usuario;
    }

    

}
