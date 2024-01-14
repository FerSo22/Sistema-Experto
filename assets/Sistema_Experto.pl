% This buffer is for notes you don't want to save.
% If you want to create a file, visit that file with C-x C-f,
% then enter the text in that file's own buffer.
:-dynamic tiene/1.
lista([]):-
    enfermedad(E),
    write(E).
lista([H|T]):-
    assert(tiene(H)),
    lista(T).

test(X) :-
    limpiar,
    lista(X).% write( 'Hola mundo cruel ' ),
    %write(X).

enfermedad('VIH'):-
    tiene(s1),
    tiene(s2),
    tiene(s3),
    tiene(s4),
    tiene(s5).
enfermedad('EDC'):-
    tiene(s2),
    tiene(s3),
    tiene(s6),
    tiene(s7),
    tiene(s8).
enfermedad('AR'):-
    tiene(s1),
    tiene(s2),
    tiene(s3),
    tiene(s8),
    tiene(s9).
enfermedad('N'):-
    tiene(s1),
    tiene(s2),
    tiene(s10),
    tiene(s11),
    tiene(s12).
enfermedad('HC'):-
    tiene(s2),
    tiene(s3),
    tiene(s6),
    tiene(s13),
    tiene(s14).
enfermedad('EM'):-
    tiene(s2),
    tiene(s4),
    tiene(s5),
    tiene(s15),
    tiene(s16).
enfermedad('DT2'):-
    tiene(s2),
    tiene(s3),
    tiene(s17),
    tiene(s18),
    tiene(s19).
enfermedad('L'):-
    tiene(s1),
    tiene(s2),
    tiene(s20),
    tiene(s21),
    tiene(s22).
enfermedad('IRC'):-
    tiene(s2),
    tiene(s14),
    tiene(s23),
    tiene(s24),
    tiene(s25).
enfermedad('EC'):-
    tiene(s2),
    tiene(s3),
    tiene(s6),
    tiene(s7),
    tiene(s8).
enfermedad(_):-fail.

limpiar:-
    retract(tiene(_)),
    fail.
limpiar.
