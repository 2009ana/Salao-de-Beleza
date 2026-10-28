using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace PetAdocaoApi.Models;

[Table("Pets")]
public class Pet
{
    [Key]
    public int id_pet { get; set; }

    public string nome { get; set; } = "";

    public string especie { get; set; } = "";

    public int idade { get; set; }

    public string? pelagem { get; set; }

    public int sexo { get; set; }

    public string status { get; set; } = "";
}