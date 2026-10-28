using Microsoft.EntityFrameworkCore;
using SalaoBeleza.Data;
using SalaoBeleza.Repositories;
using SalaoBeleza.Services;

var builder = WebApplication.CreateBuilder(args);

// Conecta o Entity Framework ao PostgreSQL usando a string de conexao.
builder.Services.AddDbContext<AppDbContext>(options =>
    options.UseNpgsql(builder.Configuration.GetConnectionString("Postgres")));

// Registra os repositorios (acesso ao banco).
builder.Services.AddScoped<IClienteRepository, ClienteRepository>();
builder.Services.AddScoped<IServicoRepository, ServicoRepository>();
builder.Services.AddScoped<IAgendamentoRepository, AgendamentoRepository>();

// Registra os services (regras de negocio).
builder.Services.AddScoped<ClienteService>();
builder.Services.AddScoped<ServicoService>();
builder.Services.AddScoped<AgendamentoService>();

// Habilita os controllers.
builder.Services.AddControllers();

// Habilita o Swagger (documentacao e teste da API).
builder.Services.AddEndpointsApiExplorer();
builder.Services.AddSwaggerGen();

// Libera o acesso do frontend (CORS).
builder.Services.AddCors(options =>
{
    options.AddPolicy("Liberado", policy =>
        policy.AllowAnyOrigin()
              .AllowAnyMethod()
              .AllowAnyHeader());
});

var app = builder.Build();

// Ativa o Swagger.
app.UseSwagger();
app.UseSwaggerUI();

// Ativa o CORS.
app.UseCors("Liberado");

// Permite servir a pagina do frontend (wwwroot/index.html).
app.UseDefaultFiles();
app.UseStaticFiles();

app.MapControllers();

app.Run();
