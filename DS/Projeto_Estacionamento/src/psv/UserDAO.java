package psv;

import java.sql.*;
import java.util.*;
import java.util.logging.Level;
import java.util.logging.Logger;

public class UserDAO {
    
    private Connection con;
    
    public UserDAO(Connection con){
        this.con = con;
    }

    public Connection getCon() {
        return con;
    }

    public void setCon(Connection con) {
        this.con = con;
    }
    
    public String inserirUsuario(UserBean User) {

        String sql = "insert into user(nome,usuario,senha)values(?,?,?)";

        try {
            PreparedStatement ps = getCon().prepareStatement(sql);

            //Inserir os valores do java no sql
            ps.setString(1, User.getNome());
            ps.setString(2, User.getUsuario());
            ps.setString(3, User.getSenha());

            if (ps.executeUpdate() > 0) {
                return "Inserido com sucesso!!!";
            } else {
                return "Erro ao inserir!!!";
            }

        } catch (SQLException ex) {
            return ex.getMessage();
        }
    }
    
    //Criar o método update
    public String alterarUsuario(UserBean User) {

        //Alterando os registros inseridos no bd
        String sql = "update user set nome = ?, senha = ? where usuario = ?";

        try {

            PreparedStatement ps = getCon().prepareStatement(sql);

            ps.setString(1, User.getNome());
            ps.setString(2, User.getSenha());
            ps.setString(3, User.getUsuario());

            if (ps.executeUpdate() > 0) {

                return "Alterado com sucesso!!!";

            } else {
                return "Erro ao alterar!!!";
            }
        } catch (SQLException ex) {
            return ex.getMessage();
        }

    }
    
    //Criar método delete
    public String excluirUsuario(UserBean User) {

        String sql = "delete from user where usuario = ?";

        try {
            PreparedStatement ps = getCon().prepareStatement(sql);

            ps.setString(1, User.getUsuario());

            if (ps.executeUpdate() > 0) {
                return "Excluido com sucesso!!!";
            } else {
                return "Erro ao excluir!!!";
            }

        } catch (SQLException ex) {
            return ex.getMessage();
        }
    }
    
    //Criar o select
    public List<UserBean> listarTodos() {

        String sql = "select * from user";

        //Criando um vetor ou matriz vazia para carregar os valores do bd
        List<UserBean> listaUser = new ArrayList<>();

        try {
            PreparedStatement ps = getCon().prepareStatement(sql);

            ResultSet rs = ps.executeQuery();

            if (rs != null) {

                while (rs.next()) {

                    UserBean cb = new UserBean();
                    cb.setNome(rs.getString(1));
                    cb.setUsuario(rs.getString(2));
                    cb.setSenha(rs.getString(3));

                    listaUser.add(cb);
                }
                return listaUser;
            } else {
                return null;
            }

        } catch (SQLException ex) {
            return null;
        }

    }
    
    public boolean acesso(UserBean user){
        
       String sql = "SELECT * FROM user WHERE usuario=? and senha=? and nv_acesso= ?";
        
        try {
            
            PreparedStatement ps = con.prepareStatement(sql);
            
            ps.setString(1, user.getUsuario());
            ps.setString(2, user.getSenha());
            
            ResultSet rs = ps.executeQuery();
            if (rs.next()) {
                
                return true;
            }else{
                return false;
            }
            
            
        } catch (SQLException ex) {
            return false;
        }
    }
    
  
}
    
    
 
