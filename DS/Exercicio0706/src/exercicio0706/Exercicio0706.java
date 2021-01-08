package exercicio0706;

import javax.swing.JOptionPane;

public class Exercicio0706 {

    public static void main(String[] args) {

        String msg = " ";

        msg = JOptionPane.showInputDialog(null, "Digite aqui o seu salário");
        double sal = Double.parseDouble(msg);

        double inss = sal * 92 / 100;
        double inss2 = sal * 91 / 100;
        double inss3 = sal * 89 / 100;

        if ((sal <= 965.67) && (sal >= 465.00)) {
            JOptionPane.showMessageDialog(null, "Seu salário é R$" + sal);
            JOptionPane.showMessageDialog(null, "A aliquota de INSS aplicada será de 8%");
            JOptionPane.showMessageDialog(null, "Será descontado do seu salário um valor de R$" + (sal - inss));
            JOptionPane.showMessageDialog(null, "Com o desconto do INSS seu salário será de R$" + inss);
        } else if ((sal >= 965.68) && (sal <= 1609.45)) {
            JOptionPane.showMessageDialog(null, "Seu salário é R$" + sal);
            JOptionPane.showMessageDialog(null, "A aliquota de INSS aplicada será de 9%");
            JOptionPane.showMessageDialog(null, "Será descontado do seu salário um valor de R$" + (sal - inss2));
            JOptionPane.showMessageDialog(null, "Com o desconto do INSS seu salário será de R$" + inss2);
        } else if ((sal >= 1609.46) && (sal <= 3218.90)) {
            JOptionPane.showMessageDialog(null, "Seu salário é R$" + sal);
            JOptionPane.showMessageDialog(null, "A aliquota de INSS aplicada será de 11%");
            JOptionPane.showMessageDialog(null, "Será descontado do seu salário um valor de R$" + (sal - inss3));
            JOptionPane.showMessageDialog(null, "Com o desconto do INSS seu salário será de R$" + inss3);
        } else {
            JOptionPane.showMessageDialog(null, "Valor inválido ");
        }

    }
}
