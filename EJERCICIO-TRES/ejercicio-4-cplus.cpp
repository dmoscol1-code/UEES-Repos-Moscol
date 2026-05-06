#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {
    const int N = 25;
    char sucursales[N][20];
    double ventas[N];
    double suma = 0.0;
    double prom_ventas;

    clock_t start = clock();

    srand(time(NULL));

    for (int i = 0; i < N; i++) {
        sprintf(sucursales[i], "Sucursal %d", i + 1);

        double r = (double)rand() / RAND_MAX;
        ventas[i] = 5000 + r * (50000 - 5000);

        suma += ventas[i];
    }

    prom_ventas = suma / N;

    printf("Ventas por sucursal:\n");
    for (int i = 0; i < N; i++) {
        printf("%s: $%.2f\n", sucursales[i], ventas[i]);
    }

    printf("\nPromedio de ventas: %.2f\n", prom_ventas);

    printf("\nSucursales con ventas mayores a promedio:\n");
    for (int i = 0; i < N; i++) {
        if (ventas[i] > prom_ventas) {
            printf("- %s: $%.2f\n", sucursales[i], ventas[i]);
        }
    }

    double elapsed = (double)(clock() - start) / CLOCKS_PER_SEC;
    printf("\nTime: %.6f segundos\n", elapsed);

    return 0;
}
