package atividadefinalds;

import java.sql.*;
import java.util.*;


public class ClienteDAO {
    
    private Connection con;

    public ClienteDAO(Connection con) {
        this.con = con;
    }

    public Connection getCon() {
        return con;
    }

    public void setCon(Connection con) {
        this.con = con;
    }
    
    
    //Insert
    public String inserirCliente(ClienteBean cliente) {
        
        String sql = "insert into clientes(ID,Nome,TelRes,TelCom,Cel,Email)values(?,?,?,?,?,?)";
        
        try {
            PreparedStatement ps = getCon().prepareStatement(sql);
            
            ps.setInt(1, cliente.getId());            
            ps.setString(2, cliente.getNome());
            ps.setString(3, cliente.getTelRes());
            ps.setString(4, cliente.getTelCom());
            ps.setString(5, cliente.getCel());
            ps.setString(6, cliente.getEmail());
            
            if (ps.executeUpdate() > 0) {
                return "Inserido com sucesso!!!";
            } else {
                return "Erro ao inserir!!!";
            }
            
        } catch (SQLException ex) {
            return ex.getMessage();
        }
    }
    
    
    //Delete
    public String removerCliente(ClienteBean cliente) {

        String sql = "delete from clientes where ID = ?";

        try {
            PreparedStatement ps = getCon().prepareStatement(sql);

            ps.setInt(1, cliente.getId());

            if (ps.executeUpdate() > -1) {
                return "Excluido com sucesso!!!";
            } else {
                return "Erro ao excluir!!!";
            }

        } catch (SQLException ex) {
            return ex.getMessage();
        }
    }
    
    
    //update
    public String alterarCliente(ClienteBean cliente) {

    String sql = "update clientes set Nome = ?, TelRes = ?, TelCom = ?, Cel = ?, Email = ? where ID = ?";

        try {

            PreparedStatement ps = getCon().prepareStatement(sql);

            ps.setString(1, cliente.getNome());
            ps.setString(2, cliente.getTelRes());
            ps.setString(3, cliente.getTelCom());
            ps.setString(4, cliente.getCel());
            ps.setString(5, cliente.getEmail());
            ps.setInt   (6, cliente.getId());

            
            if (ps.executeUpdate() > -1) {

                return "Alterado com sucesso!!!";

            } else {
                return "Erro ao alterar!!!";
            }
        } catch (SQLException ex) {
            return ex.getMessage();
        }

    }
    
    
    //Select
    public List<ClienteBean> listarCliente() {

        String sql = "select * from clientes";

        List<ClienteBean> listaCliente = new ArrayList<>();

        try {
            PreparedStatement ps = getCon().prepareStatement(sql);

            ResultSet rs = ps.executeQuery();

            if (rs != null) {

                while (rs.next()) {

                    ClienteBean cb = new ClienteBean();
                    cb.setId(rs.getInt(1));
                    cb.setNome(rs.getString(2));
                    cb.setTelRes(rs.getString(3));
                    cb.setTelCom(rs.getString(4));
                    cb.setCel(rs.getString(5));
                    cb.setEmail(rs.getString(6));


                    listaCliente.add(cb);
                }
                return listaCliente;
            } else {
                return null;
            }

        } catch (SQLException ex) {
            return null;
        }
        
        
    }
    

}
