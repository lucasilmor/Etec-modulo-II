package atividadefinalds;


public class EmpresaBean {
    
    private int cod;
    private String nome;
    private String cnpj;
    private String razao;

    public EmpresaBean() {
    }

    public EmpresaBean(int cod, String nome, String cnpj, String razao) {
        this.cod = cod;
        this.nome = nome;
        this.cnpj = cnpj;
        this.razao = razao;
    }

    public int getCod() {
        return cod;
    }

    public String getNome() {
        return nome;
    }

    public String getCnpj() {
        return cnpj;
    }

    public String getRazao() {
        return razao;
    }

    public void setCod(int cod) {
        this.cod = cod;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setCnpj(String cnpj) {
        this.cnpj = cnpj;
    }

    public void setRazao(String razao) {
        this.razao = razao;
    }
    
    
    
}
