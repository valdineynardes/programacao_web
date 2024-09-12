#pragma once

namespace MyERPApp {

    using namespace System;
    using namespace System::ComponentModel;
    using namespace System::Collections;
    using namespace System::Windows::Forms;
    using namespace System::Data;
    using namespace System::Drawing;

    public ref class Form1 : public System::Windows::Forms::Form
    {
    public:
        Form1(void)
        {
            InitializeComponent();
        }

    protected:
        ~Form1()
        {
            if (components)
            {
                delete components;
            }
        }

    private:
        // Componentes do formulário
        System::Windows::Forms::TextBox^ txtNomeProduto;
        System::Windows::Forms::TextBox^ txtPrecoProduto;
        System::Windows::Forms::TextBox^ txtQuantidadeProduto;
        System::Windows::Forms::Button^ btnCadastrarProduto;
        System::Windows::Forms::Button^ btnExcluir;
        System::Windows::Forms::Button^ btnEditar;
        System::Windows::Forms::DataGridView^ dataGridView1;
    private: System::Windows::Forms::DataGridViewTextBoxColumn^ dataGridViewTextBoxColumn1;
    private: System::Windows::Forms::DataGridViewTextBoxColumn^ dataGridViewTextBoxColumn2;
    private: System::Windows::Forms::DataGridViewTextBoxColumn^ dataGridViewTextBoxColumn3;
    private: System::Windows::Forms::Label^ label1;
    private: System::Windows::Forms::Label^ label2;
    private: System::Windows::Forms::Label^ label3;



    private:
        System::ComponentModel::Container^ components;

        void InitializeComponent(void)
        {
            this->txtNomeProduto = (gcnew System::Windows::Forms::TextBox());
            this->txtPrecoProduto = (gcnew System::Windows::Forms::TextBox());
            this->txtQuantidadeProduto = (gcnew System::Windows::Forms::TextBox());
            this->btnCadastrarProduto = (gcnew System::Windows::Forms::Button());
            this->btnExcluir = (gcnew System::Windows::Forms::Button());
            this->btnEditar = (gcnew System::Windows::Forms::Button());
            this->dataGridView1 = (gcnew System::Windows::Forms::DataGridView());
            this->dataGridViewTextBoxColumn1 = (gcnew System::Windows::Forms::DataGridViewTextBoxColumn());
            this->dataGridViewTextBoxColumn2 = (gcnew System::Windows::Forms::DataGridViewTextBoxColumn());
            this->dataGridViewTextBoxColumn3 = (gcnew System::Windows::Forms::DataGridViewTextBoxColumn());
            this->label1 = (gcnew System::Windows::Forms::Label());
            this->label2 = (gcnew System::Windows::Forms::Label());
            this->label3 = (gcnew System::Windows::Forms::Label());
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->dataGridView1))->BeginInit();
            this->SuspendLayout();
            // 
            // txtNomeProduto
            // 
            this->txtNomeProduto->Location = System::Drawing::Point(16, 30);
            this->txtNomeProduto->Name = L"txtNomeProduto";
            this->txtNomeProduto->Size = System::Drawing::Size(345, 20);
            this->txtNomeProduto->TabIndex = 0;
            // 
            // txtPrecoProduto
            // 
            this->txtPrecoProduto->Location = System::Drawing::Point(16, 81);
            this->txtPrecoProduto->Name = L"txtPrecoProduto";
            this->txtPrecoProduto->Size = System::Drawing::Size(101, 20);
            this->txtPrecoProduto->TabIndex = 1;
            // 
            // txtQuantidadeProduto
            // 
            this->txtQuantidadeProduto->Location = System::Drawing::Point(137, 81);
            this->txtQuantidadeProduto->Name = L"txtQuantidadeProduto";
            this->txtQuantidadeProduto->Size = System::Drawing::Size(77, 20);
            this->txtQuantidadeProduto->TabIndex = 2;
            // 
            // btnCadastrarProduto
            // 
            this->btnCadastrarProduto->Location = System::Drawing::Point(229, 75);
            this->btnCadastrarProduto->Name = L"btnCadastrarProduto";
            this->btnCadastrarProduto->Size = System::Drawing::Size(132, 30);
            this->btnCadastrarProduto->TabIndex = 3;
            this->btnCadastrarProduto->Text = L"Cadastrar Produto";
            this->btnCadastrarProduto->Click += gcnew System::EventHandler(this, &Form1::btnCadastrarProduto_Click);
            // 
            // btnExcluir
            // 
            this->btnExcluir->Location = System::Drawing::Point(377, 199);
            this->btnExcluir->Name = L"btnExcluir";
            this->btnExcluir->Size = System::Drawing::Size(100, 30);
            this->btnExcluir->TabIndex = 4;
            this->btnExcluir->Text = L"Excluir Produto";
            this->btnExcluir->Click += gcnew System::EventHandler(this, &Form1::btnExcluir_Click);
            // 
            // btnEditar
            // 
            this->btnEditar->Location = System::Drawing::Point(377, 163);
            this->btnEditar->Name = L"btnEditar";
            this->btnEditar->Size = System::Drawing::Size(100, 30);
            this->btnEditar->TabIndex = 5;
            this->btnEditar->Text = L"Editar Produto";
            this->btnEditar->Click += gcnew System::EventHandler(this, &Form1::btnEditar_Click);
            // 
            // dataGridView1
            // 
            this->dataGridView1->Columns->AddRange(gcnew cli::array< System::Windows::Forms::DataGridViewColumn^  >(3) {
                this->dataGridViewTextBoxColumn1,
                    this->dataGridViewTextBoxColumn2, this->dataGridViewTextBoxColumn3
            });
            this->dataGridView1->Location = System::Drawing::Point(16, 133);
            this->dataGridView1->Name = L"dataGridView1";
            this->dataGridView1->Size = System::Drawing::Size(342, 137);
            this->dataGridView1->TabIndex = 6;
            // 
            // dataGridViewTextBoxColumn1
            // 
            this->dataGridViewTextBoxColumn1->HeaderText = L"Nome do Produto";
            this->dataGridViewTextBoxColumn1->Name = L"dataGridViewTextBoxColumn1";
            // 
            // dataGridViewTextBoxColumn2
            // 
            this->dataGridViewTextBoxColumn2->HeaderText = L"Preço";
            this->dataGridViewTextBoxColumn2->Name = L"dataGridViewTextBoxColumn2";
            // 
            // dataGridViewTextBoxColumn3
            // 
            this->dataGridViewTextBoxColumn3->HeaderText = L"Quantidade";
            this->dataGridViewTextBoxColumn3->Name = L"dataGridViewTextBoxColumn3";
            // 
            // label1
            // 
            this->label1->AutoSize = true;
            this->label1->Location = System::Drawing::Point(16, 13);
            this->label1->Name = L"label1";
            this->label1->Size = System::Drawing::Size(90, 13);
            this->label1->TabIndex = 7;
            this->label1->Text = L"Nome do Produto";
            this->label1->Click += gcnew System::EventHandler(this, &Form1::label1_Click);
            // 
            // label2
            // 
            this->label2->AutoSize = true;
            this->label2->Location = System::Drawing::Point(16, 64);
            this->label2->Name = L"label2";
            this->label2->Size = System::Drawing::Size(35, 13);
            this->label2->TabIndex = 7;
            this->label2->Text = L"Preço";
            this->label2->Click += gcnew System::EventHandler(this, &Form1::label1_Click);
            // 
            // label3
            // 
            this->label3->AutoSize = true;
            this->label3->Location = System::Drawing::Point(134, 64);
            this->label3->Name = L"label3";
            this->label3->Size = System::Drawing::Size(62, 13);
            this->label3->TabIndex = 7;
            this->label3->Text = L"Quantidade";
            this->label3->Click += gcnew System::EventHandler(this, &Form1::label1_Click);
            // 
            // Form1
            // 
            this->ClientSize = System::Drawing::Size(527, 288);
            this->Controls->Add(this->label3);
            this->Controls->Add(this->label2);
            this->Controls->Add(this->label1);
            this->Controls->Add(this->txtNomeProduto);
            this->Controls->Add(this->txtPrecoProduto);
            this->Controls->Add(this->txtQuantidadeProduto);
            this->Controls->Add(this->btnCadastrarProduto);
            this->Controls->Add(this->btnExcluir);
            this->Controls->Add(this->btnEditar);
            this->Controls->Add(this->dataGridView1);
            this->Name = L"Form1";
            this->Text = L"ERP - Cadastro de Produtos";
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->dataGridView1))->EndInit();
            this->ResumeLayout(false);
            this->PerformLayout();

        }

    private:
        // Função para o evento de clique do botão "Cadastrar Produto"
        System::Void btnCadastrarProduto_Click(System::Object^ sender, System::EventArgs^ e) {
            String^ nomeProduto = this->txtNomeProduto->Text;
            String^ precoProduto = this->txtPrecoProduto->Text;
            String^ quantidadeProduto = this->txtQuantidadeProduto->Text;

            // Verificação básica dos dados
            if (!String::IsNullOrWhiteSpace(nomeProduto) && !String::IsNullOrWhiteSpace(precoProduto) && !String::IsNullOrWhiteSpace(quantidadeProduto)) {
                // Adicionar os dados ao DataGridView
                this->dataGridView1->Rows->Add(nomeProduto, precoProduto, quantidadeProduto);

                // Limpar os campos
                this->txtNomeProduto->Clear();
                this->txtPrecoProduto->Clear();
                this->txtQuantidadeProduto->Clear();
            }
            else {
                MessageBox::Show("Por favor, preencha todos os campos.", "Erro", MessageBoxButtons::OK, MessageBoxIcon::Error);
            }
        }

        // Função para o evento de clique do botão "Excluir Produto"
        System::Void btnExcluir_Click(System::Object^ sender, System::EventArgs^ e) {
            if (this->dataGridView1->SelectedRows->Count > 0) {
                this->dataGridView1->Rows->RemoveAt(this->dataGridView1->SelectedRows[0]->Index);
            }
            else {
                MessageBox::Show("Por favor, selecione uma linha para excluir.", "Erro", MessageBoxButtons::OK, MessageBoxIcon::Error);
            }
        }

        // Função para o evento de clique do botão "Editar Produto"
        System::Void btnEditar_Click(System::Object^ sender, System::EventArgs^ e) {
            if (this->dataGridView1->SelectedRows->Count > 0) {
                DataGridViewRow^ row = this->dataGridView1->SelectedRows[0];
                this->txtNomeProduto->Text = row->Cells[0]->Value->ToString();
                this->txtPrecoProduto->Text = row->Cells[1]->Value->ToString();
                this->txtQuantidadeProduto->Text = row->Cells[2]->Value->ToString();

                // Remover a linha editada, já que será substituída ao cadastrar novamente
                this->dataGridView1->Rows->RemoveAt(row->Index);
            }
            else {
                MessageBox::Show("Por favor, selecione uma linha para editar.", "Erro", MessageBoxButtons::OK, MessageBoxIcon::Error);
            }
        }
    private: System::Void label1_Click(System::Object^ sender, System::EventArgs^ e) {
    }
};
}
