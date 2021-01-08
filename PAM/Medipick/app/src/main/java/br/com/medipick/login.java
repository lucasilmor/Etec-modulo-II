package br.com.medipick;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class login extends AppCompatActivity {

    Button btn_login;
    EditText txtEmail, txtSenha;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btn_login = findViewById(R.id.btn_login);
        txtEmail = findViewById(R.id.txtEmail);
        txtSenha = findViewById(R.id.txtSenha);

        btn_login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String Email = txtEmail.getText().toString();
                String Senha = txtSenha.getText().toString();

                if (Email.equals("etecia") && Senha.equals("etecia")){
                    startActivity(new Intent(getApplicationContext(),
                            activity_second.class));
                    txtEmail.requestFocus();
                    finish();
                }else{
                    Toast.makeText(getApplicationContext(),
                            "Usúario ou Senha inválidos",
                            Toast.LENGTH_SHORT).show();
                }

            }
        });

    }


}
