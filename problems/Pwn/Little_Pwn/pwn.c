#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
char buf[32];
int main(int argc, char* argv[], char* envp[]){
		int in, len, fd;
		char *str = "12345.67";
		scanf("%d", &in);
		fd = in - atoi(str);
        read(fd, buf, 32);
        if(!strcmp("LETMEWIN\n", buf)){
                printf("good job :)\n");
                system("/bin/cat flag");
                exit(0);
        }
        printf("learn about Linux file IO\n");
        return 0;

}
