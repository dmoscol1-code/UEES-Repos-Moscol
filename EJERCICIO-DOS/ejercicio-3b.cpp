#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {
    clock_t start, end;
    double cpu_time_used;

    start = clock();
    
    int val_par = 0;
    int val_impar = 0;
    int value;

    srand(time(NULL));

    for (int i = 0; i < 500; i++) {
        value = 50 + rand() % 51;

        if (value % 2 == 0) {
            val_par += value;
        } else {
            val_impar += value;
        }
    }

    printf("Numeros pares: %d\n", val_par);
    printf("Numeros impares: %d\n", val_impar);

    for (int i = 0; i < 100000000; i++);

    end = clock();

    cpu_time_used = ((double)(end - start)) / CLOCKS_PER_SEC;

    printf("Execution time: %f seconds\n", cpu_time_used);
    return 0;
}