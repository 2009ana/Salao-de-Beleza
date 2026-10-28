namespace SalaoBeleza.Models;

// Liga um cliente a um servico em uma data e hora.
public class Agendamento
{
    public int Id { get; set; }
    public DateTime DataHora { get; set; }

    // Chave estrangeira: a qual cliente este agendamento pertence.
    public int ClienteId { get; set; }
    public Cliente? Cliente { get; set; }

    // Chave estrangeira: qual servico foi agendado.
    public int ServicoId { get; set; }
    public Servico? Servico { get; set; }
}
