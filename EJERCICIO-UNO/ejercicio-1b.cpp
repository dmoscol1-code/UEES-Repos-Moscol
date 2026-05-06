#include <stdio.h>
#include <time.h>
int main() {
    clock_t start, end;
    double cpu_time_used;

    start = clock();

    int valor_total = 0;
    int contador = 0;
    int valor;

    for (int i = 0; i < 10; i++) {
        printf("Ingresa un valor: ");
        scanf("%d", &valor);

        valor_total += valor;
        contador++;
    }

    printf("El valor total es: %d\n", valor_total);
    printf("El promedio es: %.2f\n", (float)valor_total / contador);


    for (int i = 0; i < 100000000; i++);

    end = clock();

    cpu_time_used = ((double)(end - start)) / CLOCKS_PER_SEC;

    printf("Execution time: %f seconds\n", cpu_time_used);

    return 0;
}