package exercicio0707;

import javax.swing.JOptionPane;

public class Exercicio0707 {

    public static void main(String[] args) {

        String msg = JOptionPane.showInputDialog(null, "Digite aqui seu peso em Kilogramas (Kg)");
        double p = Double.parseDouble(msg);

        msg = JOptionPane.showInputDialog(null, "Digite aqui sua altura em metros (m)");
        double m = Double.parseDouble(msg);
        double imc = p / Math.pow(m, 2);

        if ((p < 0.5) || (m < 0.1)) {
            JOptionPane.showMessageDialog(null, "valor inválido");
        } else if (imc < 18.5) {
            JOptionPane.showMessageDialog(null, "Seu IMC é " + imc);
            JOptionPane.showMessageDialog(null, "Excesso de Magresa");
        } else if ((imc >= 18.5) && (imc < 25)) {
            JOptionPane.showMessageDialog(null, "Seu IMC é " + imc);
            JOptionPane.showMessageDialog(null, "Peso Normal");
        } else if ((imc >= 25) && (imc < 30)) {
            JOptionPane.showMessageDialog(null, "Seu IMC é " + imc);
            JOptionPane.showMessageDialog(null, "Excesso de Peso");
        } else if ((imc >= 30) && (imc < 35)) {
            JOptionPane.showMessageDialog(null, "Seu IMC é " + imc);
            JOptionPane.showMessageDialog(null, "Obesidade (Grau I)");
        } else if ((imc >= 35) && (imc < 40)) {
            JOptionPane.showMessageDialog(null, "Seu IMC é " + imc);
            JOptionPane.showMessageDialog(null, "Obesidade (Grau II)");
        } else if (imc >= 40) {
            JOptionPane.showMessageDialog(null, "Seu IMC é " + imc);
            JOptionPane.showMessageDialog(null, "Obesidade (Grau III)");
        }
    }
}
