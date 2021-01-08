package br.com.local.listaplanetaapp2h;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    //Declarar a variável que irá receber a ListView do XML
    ListView listView;
    //Criar os arrays que serão inseridos na listView

    String nomePlanetas[] = {"A Garota Desaparecida", "A Escolha", "A Grande Corrida", "A Marca da Vitória",
            "A Queda de Gondolin", "Angustia", "As Aventuras de Mike", "Diário de um Banana", "Direito Processual Penal",
            "Essencialismo", "Extraordinário", "Fahrenheit 451", "Harry Potter", "Nascido para correr",
             "O Alquímista", "O Princípe", "Outlander", "Rápido e Devagar", "The Witcher o último desejo", "Tom Ford"};

    int imgPlanetas[] = {R.drawable.a_garota, R.drawable.a_escolha,
            R.drawable.a_grande_corrida, R.drawable.a_marca, R.drawable.a_queda,
            R.drawable.angustia, R.drawable.as_aventuras_de_mike, R.drawable.diario_de,
            R.drawable.direito, R.drawable.essencialismo, R.drawable.extraordinario, R.drawable.fahrenheit,
            R.drawable.harry_potter, R.drawable.nascido_para_correr, R.drawable.o_alquimista, R.drawable.o_principe,
            R.drawable.outlander, R.drawable.rapido_e_devagar, R.drawable.the_witcher, R.drawable.tom_ford};


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //a variavel listview está recebendo a listView XML
        listView = findViewById(R.id.listaPlanetas);

        //Criar o objeto/classe que irá inserir o modelo na listView

        CustomAdapter customAdapter = new CustomAdapter();

        //Carregar o baseAdapter na listView
        listView.setAdapter(customAdapter);

        //Criando evento de click na listView
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                Intent intent = new Intent(getApplicationContext(),VisualizaPlaneta_MainActivity.class);
                //Passando valores de uma janela para outra
                intent.putExtra("nomePlaneta",nomePlanetas[i]);
                intent.putExtra("imagemPlaneta",imgPlanetas[i]);

                startActivity(intent);

            }
        });


    }

    //inner class - Classe dentro de outra Classe
    public class CustomAdapter extends BaseAdapter {

        @Override
        public int getCount() {
            return imgPlanetas.length;
        }

        @Override
        public Object getItem(int i) {
            return null;
        }

        @Override
        public long getItemId(int i) {
            return 0;
        }

        //Montar o modelo para ser inserido na lista de planetas - ListView
        @Override
        public View getView(int i, View view, ViewGroup viewGroup) {
            TextView txtNomePlaneta;
            ImageView imagemPlaneta;

            //instanciando o modelo com os componentes para inserir na Lista
            View carregaView = getLayoutInflater().inflate(R.layout.modelo_lista_planetas, null);

            txtNomePlaneta = carregaView.findViewById(R.id.txtListaPlaneta);
            imagemPlaneta = carregaView.findViewById(R.id.imgListaPlaneta);

            //Carregando os valores nos componentes

            txtNomePlaneta.setText(nomePlanetas[i]);
            imagemPlaneta.setImageResource(imgPlanetas[i]);

            return carregaView;
        }
    }
}