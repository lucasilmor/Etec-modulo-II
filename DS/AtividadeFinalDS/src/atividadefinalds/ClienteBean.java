package atividadefinalds;


public class ClienteBean {
    
    private int id;
    private String nome;
    private String telRes;
    private String telCom;
    private String cel;
    private String email;

    public ClienteBean() {
    }

    public ClienteBean(int id, String nome, String telRes, String telCom, String cel, String email) {
        this.id = id;
        this.nome = nome;
        this.telRes = telRes;
        this.telCom = telCom;
        this.cel = cel;
        this.email = email;
    }
    
    

    public int getId() {
        return id;
    }

    public String getNome() {
        return nome;
    }

    public String getTelRes() {
        return telRes;
    }

    public String getTelCom() {
        return telCom;
    }

    public String getCel() {
        return cel;
    }

    public String getEmail() {
        return email;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setTelRes(String telRes) {
        this.telRes = telRes;
    }

    public void setTelCom(String telCom) {
        this.telCom = telCom;
    }

    public void setCel(String cel) {
        this.cel = cel;
    }

    public void setEmail(String email) {
        this.email = email;
    }
    
}
