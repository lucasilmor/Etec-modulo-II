
package optionpane;

import javax.swing.*;

public class OptionPane {

   
    public static void main(String args[]) {
        double n, n1, resp= 0;
        String msg= "";
        
        msg = JOptionPane.showInputDialog(null, "Insira um número");
        n = Double.parseDouble(msg);
        
        msg = JOptionPane.showInputDialog(null, "Insira um número");
        n1 = Double.parseDouble(msg);
        
        resp = n*n1;
        
        JOptionPane.showMessageDialog(null, "A multiplicação é"+resp);
      
    }
    
}
