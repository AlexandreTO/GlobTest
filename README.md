# GlobTest

## Enoncé

[Echo](https://www.instagram.com/globalisecho/?hl=fr), mascotte de l'équipe de [Globalis](https://www.globalis-ms.com/), a découvert une fonction `foo()` bien mystérieuse. Hélas, il n'a pas accès au code. Curieux et grand amateur de [rétro-ingénierie](https://fr.wikipedia.org/wiki/R%C3%A9tro-ing%C3%A9nierie), Echo s'est amusé à appeler cette fonction, en injectant des données en entrée et en récoltant les sorties. Le comportement de la fonction `foo()` est le suivant :

|  Appel     |  Sortie     |
| ---   |:-:    |
| `foo([[0, 3], [6, 10]])` | `[[0, 3], [6, 10]]` |
| `foo([[0, 5], [3, 10]])` | `[[0, 10]]` |
| `foo([[0, 5], [2, 4]])` | `[[0, 5]]` |
| `foo([[7, 8], [3, 6], [2, 4]])` | `[[2, 6], [7, 8]]` |
| `foo([[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]])` | `[[1, 10], [15, 20]]` |

Le challenge, si vous l'acceptez, serait d'aider Echo à comprendre ce que fait cette fonction et à la recoder. Vous êtes partant ? ;)

### Question 1

 > Expliquez, en quelques lignes, ce que fait cette fonction.

La fonction `foo` prend en entrée un tableau d'intervalles. Elle retourne un tableau d'intervalles fusionnés, c'est-à-dire que les intervalles qui se chevauchent sont fusionnées et les intervalles qui ne se chevauchent pas sont conservés tels quels.

Comme par example, `foo([[0, 5], [3, 10]])` retourne `[[0, 10]]` car les intervalles `[0, 5]` et `[3, 10]` se chevauchent ou bien `foo([[0, 3], [6, 10]])` retourne `[[0, 3], [6, 10]]` car les intervalles `[0, 3]` et `[6, 10]` ne se chevauchent pas.

### Question 2

Voir le fichier foo.php.

```bash
php -f foo.php
```

### Question 3

Cela m'a pris 25 minutes pour réaliser ce test.
