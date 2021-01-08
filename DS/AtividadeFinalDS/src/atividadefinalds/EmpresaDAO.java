package atividadefinalds;

import java.sql.*;
import java.util.*;

public class EmpresaDAO {
    
    private Connection con;

    public EmpresaDAO(Connection con) {
        this.con = con;
    }

    public Connection getCon() {
        return con;
    }

    public void setCon(Connection con) {
        this.con = con;
    }
    
    public String inserirEmpresa(EmpresaBean empresa) {
        
        String sql = "insert into tbempresa(codEmp,nomeEmp,CNPJ,razaoSocial)values(?,?,?,?)";
        
        try {
            PreparedStatement ps = getCon().prepareStatement(sql);
            
            ps.setInt(1, empresa.getCod());            
            ps.setString(2, empresa.getNome());
            ps.setString(3, empresa.getCnpj());
            ps.setString(4, empresa.getRazao());
            
            if (ps.executeUpdate() > 0) {
                return "Inserido com sucesso!!!";
            } else {
                return "Erro ao inserir!!!";
            }
            
        } catch (SQLException ex) {
            return ex.getMessage();
        }
    }
    
    public String removerEmpresa(EmpresaBean empresa) {

        String sql = "delete from tbempresa where codEmp = ?";

        try {
            PreparedStatement ps = getCon().prepareStatement(sql);

            ps.setInt(1, empresa.getCod());

            if (ps.executeUpdate() > -1) {
                return "Excluido com sucesso!!!";
            } else {
                return "Erro ao excluir!!!";
            }

        } catch (SQLException ex) {
            return ex.getMessage();
        }
    }
    
    public String alterarEmpresa(EmpresaBean empresa) {

    String sql = "update tbempresa set nomeEmp = ?, CNPJ = ?, razaoSocial = ? where codEmp = ?";

        try {

            PreparedStatement ps = getCon().prepareStatement(sql);

            ps.setString(1, empresa.getNome());
            ps.setString(2, empresa.getCnpj());
            ps.setString(3, empresa.getRazao());
            ps.setInt   (4, empresa.getCod());

            
            if (ps.executeUpdate() > -1) {

                return "Alterado com sucesso!!!";

            } else {
                return "Erro ao alterar!!!";
            }
        } catch (SQLException ex) {
            return ex.getMessage();
        }

    }
    public List<EmpresaBean> listarEmpresa() {

        String sql = "select * from tbempresa";

        List<EmpresaBean> listaEmpresa = new ArrayList<>();

        try {
            PreparedStatement ps = getCon().prepareStatement(sql);

            ResultSet rs = ps.executeQuery();

            if (rs != null) {

                while (rs.next()) {

                    EmpresaBean eb = new EmpresaBean();
                    eb.setCod(rs.getInt(1));
                    eb.setNome(rs.getString(2));
                    eb.setCnpj(rs.getString(3));
                    eb.setRazao(rs.getString(4));

                    listaEmpresa.add(eb);
                }
                return listaEmpresa;
            } else {
                return null;
            }

        } catch (SQLException ex) {
            return null;
        }
        
        
        
        
        
    }
}
